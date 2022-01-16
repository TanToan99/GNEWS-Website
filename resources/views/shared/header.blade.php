<header>
    <!-- screen >= 998px -->
    <nav>
        <div class="container">
            <div class="navbar">
                <div class="nav-menu">
                    <div class="nav-brand">
                        <a href="{{ route('home') }}"><img class="logo" src="images/logoG_2.png"
                                alt="logo" /></a>
                    </div>
                    <div class="nav-element">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="{{ route('posts') }}">News</a></li>
                            <li><a href="animation.html">Events</a></li>
                            <li><a href="{{ route('aboutus') }}">About Us</a></li>
                            @guest
                            @else
                                @if(auth()->user()->canBeAuthor())
                                <li><a href="{{ route('admin.dashboard.index') }}">Admin</a></li>
                                @endif
                            @endguest
                        </ul>
                    </div>
                </div>
                <div class="nav-btn">
                    <div class="nav-search">
                        <div class="search-box">
                            <button class="btn-search">
                                <i class="fas fa-search"></i>
                            </button>
                            <input type="text" class="input-search" placeholder="Type to search..." />
                        </div>
                    </div>
                    @guest
                        <a href="{{ URL::to('auth/google') }}" class="button-btn-2"><i class="fab fa-google"></i>Sign
                            In</a>
                    @else
                        <p>Welcome, {{ auth()->user()->name }}</p>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <!-- screen <= 998px -->
    <div class="navbar-mobile">
        <div class="dropdown">
            <div><i onclick="myFunction()" class="dropbtn fas fa-bars"></i></div>
            <div id="myDropdown" class="dropdown-content">
                <a href="{{ URL::to('auth/google') }}"><i class="fab fa-google"></i>Sign In with Google</a>
                <a href="{{ route('home') }}"><i class="fas fa-home"></i>Home</a>
                <a href="{{ route('posts') }}"><i class="fas fa-newspaper"></i>News</a>
                <a href="animation.html"><i class="fas fa-glass-cheers"></i>Events</a>
                <a href="{{ route('aboutus') }}"><i class="fas fa-address-card"></i>About Us</a>
                
                @guest
                @else
                    @if(auth()->user()->canBeAuthor())
                    <a href="{{ route('admin.dashboard.index') }}">Admin</a>
                    @endif
                @endguest
            </div>
        </div>

        <a href="index.html"><img class="logo" src="images/logoG_2.png" alt="logo" /></a>

        <div class="dropdownSearch">
            <div><i onclick="myFunctionSearch()" class="dropbtn-search fas fa-search"></i></div>
            <div id="myDropdownSearch" class="dropdown-search">
                <div class="simple-search">
                    <input type="email" placeholder="Type to search..." />
                    <button>Send</button>
                </div>
            </div>
        </div>
        <!-- <div class="search-box">
          <button class="btn-search">
            <i class="fas fa-search"></i>
          </button>
          <input
            type="text"
            class="input-search"
            placeholder="Type to search..."
          />
        </div> -->
    </div>
</header>
