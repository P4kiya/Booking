<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', config('app.name'))</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    @yield('styles')

</head>

<body>

    @include('client.layout.navbar')

    <main class="main-content">

        <section class="property-section">
            <img aria-hidden="true" alt="" class="property-image"
                src="https://bookingenginecdn-2.hostaway.com/26310-logoUrl.jpg?width=3840&amp;quality=70&amp;format=webp&amp;v=2" />
            <div class="overlay">
                <div class="content">
                    <h1 class="property-title" style="color: white; font-size: 58px;">
                        Moroccan Booking and Smoky Retreat
                    </h1>
                    <p class="property-tagline" style="color: white;">BOOK DIRECT - No Booking Fees!</p>
                    <div class="filters" style="background-color: white;color: black; padding: 20px 20px;border-radius:20px">
                        <div class="filter-item">
                        </div>
                        <div class="filter-item">
                            <div class="icon">
                                <!-- Check-in Icon -->
                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="filter-content">
                                <div class="filter-label">Check-in</div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="icon">
                                <!-- Check-out Icon -->
                                <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
                            </div>
                            <div class="filter-content">
                                <div class="filter-label">Check-out</div>
                            </div>
                        </div>
                        <div class="filter-item">
                            <div class="icon">
                                <!-- Guests Icon -->
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="filter-content">
                                <div class="filter-label">Guests</div>
                            </div>
                        </div>
                        <div class="search-button" style="padding-left: 50px;">
                            <button type="button"style="border-radius:15px">
                                <span>Search</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @yield('content')


    </main>

    {{-- Scripts --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts')

</body>

</html>
