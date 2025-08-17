@extends('core.landingPage')

@section('title', 'UMKM Kota Malang | Agenda')

@section('style')
<style>
    /* Animation optimizations */
    .section-reveal {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        will-change: opacity, transform;
    }
    
    .section-reveal.revealed {
        opacity: 1;
        transform: translateY(0);
    }
    
    /* Card hover effect */
    .event-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        will-change: transform;
    }
    
    .event-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    /* Status badges */
    .status-published {
        background-color: #10B981;
        color: white;
    }
    
    .status-draft {
        background-color: #F59E0B;
        color: white;
    }
    
    .status-cancelled {
        background-color: #EF4444;
        color: white;
    }
    
    /* Date badge */
    .date-badge {
        width: 70px;
        flex-shrink: 0;
    }
    
    /* Filter buttons */
    .filter-btn.active {
        background-color: #059669;
        color: white;
    }
    
    /* Content truncation */
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Responsive adjustments */
    @media (max-width: 640px) {
        .date-badge {
            width: 60px;
        }
    }
</style>
@endsection

@section('content')
<section class="min-h-[50vh] bg-gradient-to-br from-emerald-500 to-green-600 flex items-center relative overflow-hidden pt-20">
    <div class="absolute inset-0 opacity-20 pointer-events-none">
        <div class="absolute top-20 left-10 w-72 h-72 bg-white rounded-full animate-float"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="text-center text-white py-12">
            <div class="section-reveal">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Agenda <span class="text-emerald-200">UMKM</span>
                </h1>
                <p class="text-lg md:text-xl lg:text-2xl text-emerald-100 max-w-3xl mx-auto">
                    Event, workshop, dan kegiatan terbaru untuk pengembangan UMKM Kota Malang
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Events Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 md:px-6">
        <div class="mb-12 section-reveal">
            <div class="grid md:grid-cols-3 gap-4 mb-6">
                <div class="relative">
                    <input type="text" name="search" id="searchInput" placeholder="Cari agenda..." 
                           value="{{ request('search') }}"
                           class="w-full px-4 py-3 pl-10 rounded-lg border border-gray-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition-all">
                    <i class="fas fa-search absolute left-3 top-4 text-gray-400"></i>
                </div>
                
                <select name="location" id="locationFilter" 
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition-all">
                    <option value="">Semua Lokasi</option>
                    @foreach($locations as $location)
                        <option value="{{ $location }}" {{ request('location') == $location ? 'selected' : '' }}>
                            {{ $location }}
                        </option>
                    @endforeach
                </select>
                
                <input type="date" name="date_from" id="dateFilter" 
                       value="{{ request('date_from') }}"
                       class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 transition-all"
                       placeholder="Tanggal Mulai">
            </div>
            
            <div class="flex flex-wrap gap-2 mb-4">
                <button class="filter-tag active px-4 py-2 rounded-full text-sm font-medium border border-emerald-500 bg-emerald-500 text-white hover:bg-emerald-600 transition-all" 
                        data-filter="all">
                    Semua Event
                </button>
                <button class="filter-tag px-4 py-2 rounded-full text-sm font-medium border border-gray-300 text-gray-600 hover:border-emerald-500 hover:text-emerald-600 transition-all" 
                        data-filter="upcoming">
                    Akan Datang
                </button>
                <button class="filter-tag px-4 py-2 rounded-full text-sm font-medium border border-gray-300 text-gray-600 hover:border-emerald-500 hover:text-emerald-600 transition-all" 
                        data-filter="ongoing">
                    Sedang Berlangsung
                </button>
                <button class="filter-tag px-4 py-2 rounded-full text-sm font-medium border border-gray-300 text-gray-600 hover:border-emerald-500 hover:text-emerald-600 transition-all" 
                        data-filter="past">
                    Selesai
                </button>
            </div>
        </div>

        <!-- Events Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="eventsGrid">
            @forelse($events as $event)
            <div class="section-reveal event-card bg-white rounded-xl shadow-md overflow-hidden" 
                 data-status="{{ $event->status }}"
                 data-title="{{ strtolower($event->title) }}"
                 data-location="{{ strtolower($event->location) }}"
                 data-organizer="{{ strtolower($event->organizer) }}">

                <div class="h-48 bg-emerald-100 flex items-center justify-center overflow-hidden relative">
                    @if($event->thumbnail)
                    <img src="{{ asset('storage/' . $event->thumbnail) }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                    @else
                    <i class="fas fa-calendar-alt text-emerald-600 text-5xl"></i>
                    @endif
                    <div class="absolute top-4 right-4 px-3 py-1 rounded-full text-sm font-medium 
                                @if($event->status == 'published') status-published
                                @elseif($event->status == 'draft') status-draft
                                @else status-cancelled @endif">
                        {{ ucfirst($event->status) }}
                    </div>
                </div>
                
                <!-- Event Content -->
                <div class="p-6">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="date-badge bg-emerald-50 text-center rounded-lg p-2">
                            <div class="text-emerald-600 font-bold text-xl">{{ $event->start_time->format('d') }}</div>
                            <div class="text-emerald-500 text-sm uppercase">{{ $event->start_time->format('M') }}</div>
                            <div class="text-gray-500 text-xs">{{ $event->start_time->format('Y') }}</div>
                        </div>
                        
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-800 mb-2 hover:text-emerald-600 transition-colors">
                                <a href="">{{ $event->title }}</a>
                            </h3>
                            <div class="flex items-center text-gray-500 text-sm mb-2">
                                <i class="far fa-clock mr-2"></i>
                                {{ $event->start_time->format('H:i') }} - {{ $event->end_time->format('H:i') }} WIB
                            </div>
                            <div class="flex items-center text-gray-500 text-sm">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                {{ $event->location }}
                            </div>
                        </div>
                    </div>
                    
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ Str::limit($event->content, 150) }}</p>
                    
                    <div class="flex items-center text-gray-500 text-sm mb-4">
                        <i class="fas fa-calendar mr-2"></i>
                        @if($event->start_time->format('Y-m-d') == $event->end_time->format('Y-m-d'))
                            {{ $event->start_time->format('d M Y') }}
                        @else
                            {{ $event->start_time->format('d M') }} - {{ $event->end_time->format('d M Y') }}
                        @endif
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-sm text-gray-500">Penyelenggara:</span>
                            <div class="font-medium text-gray-700">{{ $event->organizer }}</div>
                        </div>
                        <a href="{{ route('events.show', $event) }}" class="text-emerald-600 font-medium hover:text-emerald-700 transition-colors">
                            Detail <i class="fas fa-arrow-right ml-1"></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-12">
                <i class="fas fa-calendar-times text-gray-400 text-6xl mb-4"></i>
                <h3 class="text-xl font-bold text-gray-600 mb-2">Belum Ada Event</h3>
                <p class="text-gray-500">Belum ada event yang tersedia saat ini.</p>
            </div>
            @endforelse
        </div>

        @if($events->hasPages())
        <div class="mt-12 section-reveal">
            {{ $events->links() }}
        </div>
        @endif
    </div>
</section>

<!-- Upcoming Events Highlight -->
@if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 md:px-6">
        <div class="text-center mb-12 section-reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Event <span class="text-emerald-600">Terpilih</span>
            </h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Event-event pilihan yang direkomendasikan untuk UMKM
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($upcomingEvents as $event)
            <div class="section-reveal event-card bg-white rounded-xl shadow-md overflow-hidden">
                <div class="h-48 bg-emerald-100 flex items-center justify-center relative">
                    @if($event->thumbnail)
                    <img src="{{ asset('storage/' . $event->thumbnail) }}" alt="{{ $event->title }}" class="w-full h-full object-cover">
                    @else
                    <i class="fas fa-calendar-check text-emerald-600 text-5xl"></i>
                    @endif
                    <div class="absolute top-4 right-4 px-3 py-1 rounded-full bg-blue-500 text-white text-sm font-medium">
                        Featured
                    </div>
                </div>
                
                <div class="p-6">
                    <div class="flex items-start gap-4 mb-4">
                        <div class="date-badge bg-blue-50 text-center rounded-lg p-2">
                            <div class="text-blue-600 font-bold text-xl">{{ $event->start_time->format('d') }}</div>
                            <div class="text-blue-500 text-sm uppercase">{{ $event->start_time->format('M') }}</div>
                            <div class="text-gray-500 text-xs">{{ $event->start_time->format('Y') }}</div>
                        </div>
                        
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-800 mb-2">{{ $event->title }}</h3>
                            <div class="flex items-center text-gray-500 text-sm mb-2">
                                <i class="far fa-clock mr-2"></i>
                                {{ $event->start_time->format('H:i') }} - {{ $event->end_time->format('H:i') }} WIB
                            </div>
                            <div class="flex items-center text-gray-500 text-sm">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                {{ $event->location }}
                            </div>
                        </div>
                    </div>
                    
                    <a href="{{ route('events.show', $event) }}" class="inline-block w-full bg-blue-600 text-white text-center py-2 rounded-lg hover:bg-blue-700 transition-colors">
                        Lihat Detail
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- Statistics Section -->
<section class="py-16 bg-emerald-50">
    <div class="container mx-auto px-4 md:px-6">
        <div class="text-center mb-12 section-reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Statistik <span class="text-emerald-600">Event</span>
            </h2>
        </div>
        
        <div class="grid md:grid-cols-4 gap-8">
            <div class="section-reveal text-center p-6 bg-white rounded-xl shadow-md">
                <div class="text-3xl font-bold text-emerald-600 mb-2">{{ $statistics['total'] ?? 0 }}</div>
                <div class="text-gray-600">Total Event</div>
            </div>
            <div class="section-reveal text-center p-6 bg-white rounded-xl shadow-md">
                <div class="text-3xl font-bold text-blue-600 mb-2">{{ $statistics['published'] ?? 0 }}</div>
                <div class="text-gray-600">Event Published</div>
            </div>
            <div class="section-reveal text-center p-6 bg-white rounded-xl shadow-md">
                <div class="text-3xl font-bold text-orange-600 mb-2">{{ $statistics['draft'] ?? 0 }}</div>
                <div class="text-gray-600">Event Draft</div>
            </div>
            <div class="section-reveal text-center p-6 bg-white rounded-xl shadow-md">
                <div class="text-3xl font-bold text-purple-600 mb-2">{{ $statistics['upcoming'] ?? 0 }}</div>
                <div class="text-gray-600">Event Mendatang</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-r from-emerald-500 to-green-600 text-center">
    <div class="container mx-auto px-4 md:px-6">
        <div class="section-reveal">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
                Ingin Mengadakan Event UMKM?
            </h2>
            <p class="text-xl text-emerald-100 mb-8 max-w-3xl mx-auto">
                Daftarkan event Anda dan dapatkan jangkauan yang lebih luas untuk peserta
            </p>
            <a href="#" class="inline-block bg-white text-emerald-600 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors transform hover:scale-105">
                Ajukan Event <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, { threshold: 0.1 });

        document.querySelectorAll('.section-reveal').forEach(section => {
            revealObserver.observe(section);
        });

        const filterButtons = document.querySelectorAll('.filter-tag');
        const eventCards = document.querySelectorAll('.event-card');
        
        function filterEvents(filter) {
            const currentDate = new Date();
            
            eventCards.forEach(card => {
                const startDate = new Date(card.dataset.start);
                const endDate = new Date(card.dataset.end);
                
                let shouldShow = false;
                
                if (filter === 'all') {
                    shouldShow = true;
                } else if (filter === 'upcoming') {
                    shouldShow = startDate > currentDate;
                } else if (filter === 'ongoing') {
                    shouldShow = currentDate >= startDate && currentDate <= endDate;
                } else if (filter === 'past') {
                    shouldShow = endDate < currentDate;
                }
                
                if (shouldShow) {
                    card.style.display = 'block';
                    setTimeout(() => card.classList.add('revealed'), 100);
                } else {
                    card.style.display = 'none';
                }
            });
        }
        
        filterEvents('all');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.dataset.filter;
                filterButtons.forEach(btn => {
                    btn.classList.remove('active', 'bg-emerald-500', 'text-white');
                    btn.classList.add('border-gray-300', 'text-gray-600');
                });
                
                this.classList.add('active', 'bg-emerald-500', 'text-white');
                this.classList.remove('border-gray-300', 'text-gray-600');
                
                filterEvents(filter);
            });
        });

        const searchInput = document.getElementById('searchInput');
        const locationFilter = document.getElementById('locationFilter');
        const dateFilter = document.getElementById('dateFilter');
        
        function applyFilters() {
            const searchTerm = searchInput.value.toLowerCase().trim();
            const locationTerm = locationFilter.value.toLowerCase();
            const dateTerm = dateFilter.value;
            
            eventCards.forEach(card => {
                const title = card.dataset.title.toLowerCase();
                const location = card.dataset.location.toLowerCase();
                const organizer = card.dataset.organizer.toLowerCase();
                const startDate = card.dataset.start;
                
                const matchesSearch = searchTerm === '' || 
                    title.includes(searchTerm) || 
                    location.includes(searchTerm) || 
                    organizer.includes(searchTerm);
                
                const matchesLocation = locationTerm === '' || 
                    location.includes(locationTerm);
                
                const matchesDate = dateTerm === '' || 
                    startDate.startsWith(dateTerm);
                
                if (matchesSearch && matchesLocation && matchesDate) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
            
            const visibleCards = Array.from(eventCards).filter(card => 
                card.style.display !== 'none'
            );
            
            const existingNoResults = document.getElementById('noResults');
            if (existingNoResults) {
                existingNoResults.remove();
            }
            
            if (visibleCards.length === 0 && (searchTerm !== '' || locationTerm !== '' || dateTerm !== '')) {
                const noResultsDiv = document.createElement('div');
                noResultsDiv.id = 'noResults';
                noResultsDiv.className = 'col-span-full text-center py-12';
                noResultsDiv.innerHTML = `
                    <i class="fas fa-search text-gray-400 text-6xl mb-4"></i>
                    <h3 class="text-xl font-bold text-gray-600 mb-2">Tidak Ada Hasil</h3>
                    <p class="text-gray-500">Tidak ditemukan event dengan filter yang dipilih</p>
                `;
                document.getElementById('eventsGrid').appendChild(noResultsDiv);
            }
        }
        
        searchInput.addEventListener('input', applyFilters);
        locationFilter.addEventListener('change', applyFilters);
        dateFilter.addEventListener('change', applyFilters);
        
        document.querySelectorAll('.event-card').forEach(card => {
            const dateElement = card.querySelector('.date-badge');
            if (dateElement) {
                const day = dateElement.querySelector('div:first-child').textContent;
                const month = dateElement.querySelector('div:nth-child(2)').textContent;
                const year = dateElement.querySelector('div:last-child').textContent;
                const monthNumber = new Date(`${month} 1, 2020`).getMonth() + 1;
                const formattedMonth = monthNumber.toString().padStart(2, '0');
                const formattedDay = day.padStart(2, '0');
                const dateString = `${year}-${formattedMonth}-${formattedDay}`;
                
                card.dataset.start = dateString;
                card.dataset.end = dateString; 
            }
        });
    });
</script>
@endsection