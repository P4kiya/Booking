<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', config('app.name'))</title>

    {{-- Styles --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        .icon {
            cursor: pointer;
        }
        .selected-date {
            margin-top: 5px;
            font-weight: bold;
        }
        .hidden-input {
            display: none;
        }
        .flatpickr-calendar {
            left: 50% !important;
            transform: translateX(-50%);
            top: 50% !important;
            transform: translate(-50%, -50%);
        }
        .guests-selection {
            position: absolute;
            z-index: 9999;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: none;
            width: 150px;
        }
        .guests-selection .guest-controls {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .guests-selection button {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .guests-selection button:hover {
            background-color: #0056b3;
        }
        .guests-selection span {
            font-size: 18px;
            font-weight: bold;
        }
    </style>
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
                        <div class="filter-item" id="checkin-filter">
                            <div class="icon" onclick="showDatePicker('checkin-display', 'checkout-display', true)">
                                <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                            </div>
                            <div class="filter-content">
                                <div class="filter-label">Check-in</div>
                                <span id="checkin-display" class="selected-date"></span>
                                <input type="text" id="checkin-date" class="hidden-input" />
                            </div>
                        </div>
                        <div class="filter-item" id="checkout-filter">
                            <div class="icon" onclick="showDatePicker('checkout-display', 'checkin-display', false)">
                                <i class="fa fa-calendar-times-o" aria-hidden="true"></i>
                            </div>
                            <div class="filter-content">
                                <div class="filter-label">Check-out</div>
                                <span id="checkout-display" class="selected-date"></span>
                                <input type="text" id="checkout-date" class="hidden-input" />
                            </div>
                        </div>
                        <div class="filter-item" id="guests-filter">
                            <div class="icon" onclick="toggleGuestsSelection(event)">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                            <div class="filter-content">
                                <div class="filter-label">Guests</div>
                                <span id="guests-display" class="selected-date">1</span>
                            </div>
                        </div>
                        <div class="guests-selection" id="guests-selection">
                            <div class="guest-controls">
                                <button onclick="changeGuestCount(-1)">-</button>
                                <span id="guest-count">1</span>
                                <button onclick="changeGuestCount(1)">+</button>
                            </div>
                        </div>
                        <div class="search-button" style="padding-left: 50px;">
                            <button type="button" style="border-radius:15px">
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
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        function showDatePicker(displayId, otherDisplayId, isCheckin) {
            const inputId = isCheckin ? 'checkin-date' : 'checkout-date';
            flatpickr(`#${inputId}`, {
                dateFormat: "d/m/Y",
                allowInput: true,
                onChange: function(selectedDates, dateStr, instance) {
                    document.getElementById(displayId).textContent = dateStr;
                    if (isCheckin) {
                        flatpickr(`#${otherDisplayId}`, {
                            dateFormat: "d/m/Y",
                            allowInput: true,
                            minDate: dateStr
                        });
                    }
                }
            }).open();
        }

        function toggleGuestsSelection(event) {
            const guestsSelection = document.getElementById('guests-selection');
            guestsSelection.style.display = guestsSelection.style.display === 'block' ? 'none' : 'block';
            event.stopPropagation();
        }

        function changeGuestCount(change) {
            const guestCountElement = document.getElementById('guest-count');
            let currentCount = parseInt(guestCountElement.textContent);
            currentCount += change;

            if (currentCount < 1) {
                currentCount = 1;
            }

            guestCountElement.textContent = currentCount;
            document.getElementById('guests-display').textContent = currentCount;
        }

        document.addEventListener('click', function(event) {
            const guestsSelection = document.getElementById('guests-selection');
            const guestsFilter = document.getElementById('guests-filter');
            const guestControls = document.querySelector('.guest-controls');

            if (!guestsFilter.contains(event.target) && !guestControls.contains(event.target)) {
                guestsSelection.style.display = 'none';
            }
        });
    </script>
    @yield('scripts')

</body>

</html>
