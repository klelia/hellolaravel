<header class="bg-white">
    <div id="logo" class="text-center">
        <img src="{{ Vite::asset('resources/img/logo.png') }}" alt="Logo">
    </div>
    <nav class="navbar-nav container navbar-light">
        <ul class="list-unstyled d-flex justify-content-center gap-2 text-uppercase">
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''
            }}" href="{{ route('home') }}">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == 'products' ? 'active' : ''
                }}" href="{{ route('products') }}">
                    Prodotti
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Route::currentRouteName() == 'blog' ? 'active' : ''
            }}" href="{{ route('blog') }}">
                    Blog
                </a>
            </li>
        </ul>
    </nav>
</header>
