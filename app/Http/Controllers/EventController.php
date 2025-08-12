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
        
        // Public landing page - only show published events
        $query->where('status', 'published');
        
        // Search functionality
        if ($request->filled('search')) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('title', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('content', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('location', 'LIKE', "%{$searchTerm}%")
                  ->orWhere('organizer', 'LIKE', "%{$searchTerm}%");
            });
        }
        
        // Filter by date range if provided
        if ($request->filled('date_from')) {
            $query->where('start_time', '>=', Carbon::parse($request->date_from)->startOfDay());
        }
        
        if ($request->filled('date_to')) {
            $query->where('end_time', '<=', Carbon::parse($request->date_to)->endOfDay());
        }
        
        // Filter by location if provided
        if ($request->filled('location')) {
            $query->where('location', 'LIKE', "%{$request->location}%");
        }
        
        // Order by start time (nearest first)
        $query->orderBy('start_time', 'asc');
        
        // Get paginated events
        $events = $query->paginate(9)->withQueryString();
        
        // Get featured/upcoming events for highlight section (max 6)
        $upcomingEvents = Event::where('status', 'published')
            ->where('start_time', '>', Carbon::now())
            ->orderBy('start_time', 'asc')
            ->take(6)
            ->get();
        
        // Get statistics for the statistics section (only published events for public)
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
        
        // Get unique locations for filter dropdown
        $locations = Event::where('status', 'published')
            ->select('location')
            ->distinct()
            ->pluck('location')
            ->map(function($location) {
                return explode(',', $location)[0]; // Get first part of location
            })
            ->unique()
            ->sort()
            ->values();
            
        // Get unique organizers for filter dropdown
        $organizers = Event::where('status', 'published')
            ->select('organizer')
            ->distinct()
            ->orderBy('organizer')
            ->pluck('organizer');
        
        return view('landingPage.events', compact('events', 'upcomingEvents', 'statistics', 'locations', 'organizers'));
    }
}