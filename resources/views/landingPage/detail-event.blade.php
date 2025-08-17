@extends('core.landingPage')

@section('title', $event->title . ' | Agenda UMKM Malang')

@section('style')
<style>
    .event-detail {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        overflow: hidden;
    }
    
    .event-header {
        height: 400px;
        position: relative;
    }
    
    .event-header img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .event-date-badge {
        position: absolute;
        top: 2rem;
        left: 2rem;
        background: rgba(255, 255, 255, 0.9);
        padding: 1rem;
        border-radius: 0.5rem;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    
    .event-content {
        padding: 2rem;
    }
    
    .event-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        margin-bottom: 2rem;
    }
    
    .meta-item {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        color: #4B5563;
    }
    
    .meta-item i {
        color: #059669;
    }
    
    .event-description {
        line-height: 1.8;
        color: #4B5563;
    }
    
    .event-description img {
        max-width: 100%;
        height: auto;
        border-radius: 0.5rem;
        margin: 1rem 0;
    }
    
    .related-event-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .related-event-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection

@section('content')
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6">
        <div class="mb-8">
            <nav class="flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-emerald-600">
                            <i class="fas fa-home mr-2"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400"></i>
                            <a href="{{ route('events') }}" class="ml-1 text-sm font-medium text-gray-700 hover:text-emerald-600 md:ml-2">Agenda</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <i class="fas fa-chevron-right text-gray-400"></i>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">{{ Str::limit($event->title, 30) }}</span>
                        </div>
                    </li>
                </ol>
            </nav>
        </div>
        
        <div class="event-detail">
            <div class="event-header">
                @if($event->thumbnail)
                    <img src="{{ asset('storage/' . $event->thumbnail) }}" alt="{{ $event->title }}">
                @else
                    <div class="w-full h-full bg-emerald-100 flex items-center justify-center">
                        <i class="fas fa-calendar-alt text-emerald-600 text-8xl"></i>
                    </div>
                @endif
                
                <div class="event-date-badge">
                    <div class="text-3xl font-bold text-emerald-600">{{ $event->start_time->format('d') }}</div>
                    <div class="text-lg text-emerald-500 uppercase">{{ $event->start_time->format('M') }}</div>
                    <div class="text-sm text-gray-500">{{ $event->start_time->format('Y') }}</div>
                </div>
            </div>
            
            <div class="event-content">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">{{ $event->title }}</h1>
                
                <div class="event-meta">
                    <div class="meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>{{ $event->location }}</span>
                    </div>
                    <div class="meta-item">
                        <i class="far fa-clock"></i>
                        <span>{{ $event->start_time->format('H:i') }} - {{ $event->end_time->format('H:i') }} WIB</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-user-tie"></i>
                        <span>Penyelenggara: {{ $event->organizer }}</span>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-calendar-day"></i>
                        <span>
                            @if($event->start_time->format('Y-m-d') == $event->end_time->format('Y-m-d'))
                                {{ $event->start_time->format('l, d F Y') }}
                            @else
                                {{ $event->start_time->format('d M') }} - {{ $event->end_time->format('d M Y') }}
                            @endif
                        </span>
                    </div>
                </div>
                
                <div class="event-description prose max-w-none">
                    {!! Str::markdown($event->content) !!}
                </div>
            </div>
        </div>
        
        @if($relatedEvents->count() > 0)
        <div class="mt-16">
            <h2 class="text-2xl font-bold text-gray-800 mb-8">Agenda Terkait</h2>
            
            <div class="grid md:grid-cols-3 gap-6">
                @foreach($relatedEvents as $relatedEvent)
                <a href="{{ route('events.show', $relatedEvent) }}" class="related-event-card bg-white rounded-xl shadow-md overflow-hidden">
                    <div class="h-48 bg-emerald-100 flex items-center justify-center relative overflow-hidden">
                        @if($relatedEvent->thumbnail)
                            <img src="{{ asset('storage/' . $relatedEvent->thumbnail) }}" alt="{{ $relatedEvent->title }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        @else
                            <i class="fas fa-calendar-alt text-emerald-600 text-5xl"></i>
                        @endif
                    </div>
                    
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-emerald-600 transition-colors">{{ $relatedEvent->title }}</h3>
                        <div class="flex items-center text-gray-500 text-sm mb-2">
                            <i class="far fa-clock mr-2"></i>
                            {{ $relatedEvent->start_time->format('H:i') }} - {{ $relatedEvent->end_time->format('H:i') }} WIB
                        </div>
                        <div class="flex items-center text-gray-500 text-sm">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            {{ $relatedEvent->location }}
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</section>
@endsection