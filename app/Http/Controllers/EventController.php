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
        $query = Event::query();

        $query->where('status', 'published');

        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('content', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('location', 'LIKE', "%{$searchTerm}%")
                    ->orWhere('organizer', 'LIKE', "%{$searchTerm}%");
            });
        }

        if ($request->filled('date_from')) {
            $query->where('start_time', '>=', Carbon::parse($request->date_from)->startOfDay());
        }

        if ($request->filled('date_to')) {
            $query->where('end_time', '<=', Carbon::parse($request->date_to)->endOfDay());
        }

        if ($request->filled('location')) {
            $query->where('location', 'LIKE', "%{$request->location}%");
        }

        $query->orderBy('start_time', 'asc');

        $events = $query->paginate(9)->withQueryString();

        $upcomingEvents = Event::where('status', 'published')
            ->where('start_time', '>', Carbon::now())
            ->orderBy('start_time', 'asc')
            ->take(6)
            ->get();

        $statistics = [
            'total' => Event::where('status', 'published')->count(),
            'upcoming' => Event::where('status', 'published')
                ->where('start_time', '>', Carbon::now())
                ->count(),
            'ongoing' => Event::where('status', 'published')
                ->where('start_time', '<=', Carbon::now())
                ->where('end_time', '>=', Carbon::now())
                ->count(),
            'past' => Event::where('status', 'published')
                ->where('end_time', '<', Carbon::now())
                ->count(),
        ];

        $locations = Event::where('status', 'published')
            ->select('location')
            ->distinct()
            ->pluck('location')
            ->map(function ($location) {
                return explode(',', $location)[0];
            })
            ->unique()
            ->sort()
            ->values();

        $organizers = Event::where('status', 'published')
            ->select('organizer')
            ->distinct()
            ->orderBy('organizer')
            ->pluck('organizer');

        return view('landingPage.events', compact('events', 'upcomingEvents', 'statistics', 'locations', 'organizers'));
    }
}
