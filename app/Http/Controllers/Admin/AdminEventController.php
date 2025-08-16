<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Event;

class AdminEventController extends Controller
{
    public function index()
    {
        $events = Event::latest()->paginate(12);

        return view('admin.event.index', compact('events'));
    }

    public function create()
    {
        return view('admin.event.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'location' => 'required|string|max:255',
            'organizer' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'status' => 'required|in:upcoming,ongoing,completed,cancelled',
            'thumbnail' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $data = $request->only([
            'title', 'content', 'location', 'organizer',
            'start_time', 'end_time', 'status'
        ]);

        if ($request->hasFile('thumbnail')) {
            $data['thumbnail'] = $request->file('thumbnail')->store('events', 'public');
        }

        Event::create($data);

        return redirect()->route('admin.events.index')
            ->with('success', 'Event berhasil ditambahkan!');
    }

    public function show($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        return view('admin.event.show', compact('event'));
    }

    public function edit($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        return view('admin.event.edit', compact('event'));
    }

    public function update(Request $request, $slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'location' => 'required|string|max:255',
            'organizer' => 'required|string|max:255',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
            'status' => 'required|in:upcoming,ongoing,completed,cancelled',
            'thumbnail' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $data = $request->only([
            'title', 'content', 'location', 'organizer',
            'start_time', 'end_time', 'status'
        ]);

        if ($request->hasFile('thumbnail')) {
            if ($event->thumbnail) {
                Storage::disk('public')->delete($event->thumbnail);
            }
            $data['thumbnail'] = $request->file('thumbnail')->store('events', 'public');
        }

        $event->update($data);

        return redirect()->route('admin.events.show', $event->slug)
            ->with('success', 'Event berhasil diperbarui!');
    }

    public function destroy($slug)
    {
        $event = Event::where('slug', $slug)->firstOrFail();

        if ($event->thumbnail) {
            Storage::disk('public')->delete($event->thumbnail);
        }

        $event->delete();

        return redirect()->route('admin.events.index')
            ->with('success', 'Event berhasil dihapus!');
    }
}
