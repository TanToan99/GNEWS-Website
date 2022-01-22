<header>
    <!-- screen >= 998px -->
    <nav>
        <div class="container">
            <div class="navbar">
                <div class="nav-menu">
                    <div class="nav-brand">
                        <a href="{{ route('home') }}"><img class="logo" src="/images/logoG_2.png"
                                alt="logo" /></a>
                    </div>
                    <div class="nav-element">
                        <ul>
                            <li><a href="{{ route('home') }}" class="{{ Request::is('/') ? 'active' : ''}}">Home</a></li>
                            <li><a href="{{ route('posts') }}" class="{{ Request::is('posts') ? 'active' : ''}}">News</a></li>
                            <li><a href="{{ route('event') }}" class="{{ Request::is('event') ? 'active' : ''}}">Events</a></li>
                            <li><a href="{{ route('aboutus') }}" class="{{ Request::is('aboutus') ? 'active' : ''}}">About Us</a></li>
                            @guest
                            @else
                                @if (auth()->user()->canBeAuthor())
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
                            <form class="search-box" method="post" action="{{ route('posts.search') }}">
                            @csrf
                            <input type="text" class="input-search" name="keysearch" placeholder="Type to search..." />
                            </form>
                        </div>
                    </div>
                    @guest
                        <a href="{{ URL::to('auth/google') }}" class="button-btn-2"><i class="fab fa-google"></i>Sign
                            In</a>
                    @else
                        <div class="user-dropdown">
                            <img onclick="userFunction()" class="user-img" src="{{ auth()->user()->avatar }}" />
                            <div id="userDrop" class="user-content">
                                <img src="{{ auth()->user()->avatar }}" alt="profile-pic" class="profile">
                                <p style="font-weight: 500;color: var(--do);">{{ auth()->user()->name }}</p>
                                <a href="{{ route('profile') }}">Profile</a>
                                <a href="{{ route('logout') }}">Logout</a>
                            </div>
                        </div>
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
                @guest
                    <a href="{{ URL::to('auth/google') }}"><i class="fab fa-google"></i>Sign In with Google</a>
                    @endif
                    <a href="{{ route('home') }}"><i class="fas fa-home"></i>Home</a>
                    <a href="{{ route('posts') }}"><i class="fas fa-newspaper"></i>News</a>
                    <a href="{{ route('event') }}"><i class="fas fa-glass-cheers"></i>Events</a>
                    <a href="{{ route('aboutus') }}"><i class="fas fa-question-circle"></i>About Us</a>
                    @guest
                    @else
                        <a href="{{ route('profile') }}"><i class="fas fa-id-card"></i>Profile</a>
                        <a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>Logout</a>
                        @if (auth()->user()->canBeAuthor())
                            <a href="#"><i class="fas fa-users-cog"></i>Admin thì online PC nha !</a>
                        @endif
                    @endguest
                </div>
            </div>

            <a href="index.html"><img class="logo" src="/images/logoG_2.png" alt="logo" /></a>

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
