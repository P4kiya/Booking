<header class="custom-header-nav">
    <div class="custom-container">
        <div class="custom-header-inner">
            {{-- Logo Section --}}
            <div class="custom-logo">
                <a href="{{ route('index') }}">
                    <h2>Booking</h2>
                </a>
            </div>

            {{-- Navigation Menu --}}
            <div class="custom-nav">
                <nav class="custom-navigation">
                    <ul class="custom-menu">
                        <li class="custom-menu-item {{ request()->is('/') ? 'custom-active' : '' }}">
                            <a href="{{ route('index') }}">Accueil</a>
                        </li>
                        <li class="custom-menu-item">
                            <a href="{{ route('index') }}">À propos</a>
                        </li>
                        <li class="custom-menu-item">
                            <a href="{{ route('index') }}">Contactez-nous</a>
                        </li>
                    </ul>
                </nav>
            </div>

            {{-- Auth Section --}}
            <div class="custom-auth">
                <div class="custom-account">
                    <ul class="custom-auth-menu">
                        <li><a href="">Connexion</a></li>
                            <li class="custom-separator">|</li>
                            <li><a href="#" data-toggle="modal" data-target="#modal-register">S'inscrire</a></li>
                        {{-- @guest
                            
                        @else
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Déconnexion
                                </a>
                            </li>
                            <form id="logout-form"" class="d-none">
                                @csrf
                            </form>
                        @endguest --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
