<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index(Request $request): View
    {
        $query = Event::query()->where('status', 'published');

        // Search filter
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('content', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('location', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('organizer', 'LIKE', "%{$searchTerm}%");
            });
        }

        // Date filter
        if ($request->filled('date_from')) {
            $query->where('start_time', '>=', Carbon::parse($request->date_from)->startOfDay());
        }

        // Location filter
        if ($request->filled('location')) {
            $query->where('location', $request->location);
        }

        // Order by start time
        $query->orderBy('start_time', 'asc');

        // Get paginated results
        $events = $query->paginate(9)->withQueryString();

        // Get upcoming events
        $upcomingEvents = Event::where('status', 'published')
            ->where('start_time', '>', Carbon::now())
            ->orderBy('start_time', 'asc')
            ->take(3)
            ->get();

        // Statistics
        $statistics = [
            'total' => Event::where('status', 'published')->count(),
            'published' => Event::where('status', 'published')->count(),
            'draft' => Event::where('status', 'draft')->count(),
            'upcoming' => Event::where('start_time', '>', Carbon::now())->count(),
        ];

        // Unique locations
        $locations = Event::select('location')
            ->distinct()
            ->pluck('location');

        return view('landingPage.events', compact(
            'events',
            'upcomingEvents',
            'statistics',
            'locations'
        ));
    }

    public function show(Event $event): View
    {
        $relatedEvents = Event::where('status', 'published')
            ->where('id', '!=', $event->id)
            ->where(function($query) use ($event) {
                $query->where('location', $event->location)
                      ->orWhere('organizer', $event->organizer);
            })
            ->orderBy('start_time', 'asc')
            ->take(3)
            ->get();

        return view('landingPage.detail-event', compact('event', 'relatedEvents'));
    }
}