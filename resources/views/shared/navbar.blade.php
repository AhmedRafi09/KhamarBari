<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}" style="padding-top: 0;">
            {{-- {{ config('app.name', 'Laravel') }} --}}
            {{-- {{  __('Khamar Bari') }} --}}
            
            {{-- <img src="/images/logo/khaasfood.png" width="130" height="35" alt=""> --}}

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            {{-- @if (Auth::check() && Auth::user()->isAdmin == 1) --}}
            
            
            
            <ul class="navbar-nav mr-auto">
                @if (Auth::guest())
                    <a class="navbar-brand" href="/">
                        {{  __('HOME') }}
                    </a>
                    <a class="navbar-brand" href="/products/product_info">
                        {{  __('PRODUCTS') }}
                    </a>
                    <a class="navbar-brand" href="/blogs">
                        {{  __('BLOG') }}
                    </a>
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        {{  __('CONTACT US') }}
                    </a>
                @else
                    @if (Auth::check() && Auth::user()->isAdmin == 1)
                        <a class="navbar-brand" href="/">
                            {{  __('HOME') }}
                        </a>
                        <a class="navbar-brand" href="/products/product_info">
                            {{  __('PRODUCTS') }}
                        </a>
                        <a class="navbar-brand" href="/blogs">
                            {{  __('BLOG') }}
                        </a>
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            {{  __('CONTACT US') }}
                        </a>
                        <a class="navbar-brand" href="/home">
                            {{  __('ADMIN PANEL') }}
                        </a>
                        <a class="navbar-brand" href="/dashboard">
                            {{  __('DASHBOARD') }}
                        </a>
                    @else
                        <a class="navbar-brand" href="/">
                            {{  __('HOME') }}
                        </a>
                        <a class="navbar-brand" href="/products/product_info">
                            {{  __('PRODUCTS') }}
                        </a>
                        <a class="navbar-brand" href="/blogs">
                            {{  __('BLOG') }}
                        </a>
                        <a class="navbar-brand" href="{{ url('/home') }}">
                            {{  __('CONTACT US') }}
                        </a>
                    @endif
                @endif                
            </ul>

    
            


        
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('LOGIN') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('REGISTER') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
        </ul>



    </div>
</div>
</nav>