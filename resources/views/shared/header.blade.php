<header>
    <!-- screen >= 998px -->
    <nav>
        <div class="container">
            <div class="navbar">
                <div class="nav-menu">
                    <div class="nav-brand">
                        <a href="{{ route('home') }}"><img class="logo" src="/images/logoG_4.png"
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
                        <div class="user-dropdown">
                            <img onclick="userFunction()" class="user-img" src="https://scontent.fdad4-1.fna.fbcdn.net/v/t39.30808-6/272000826_483527643141091_4617989553483562623_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=5wKEH09XBuQAX-b2qBN&_nc_ht=scontent.fdad4-1.fna&oh=00_AT_UtUS8CM8lqw7CNcwvEt5sVL1k-GgUg3-5vB91K7QZVQ&oe=61EB0F8B" />
                            <div id="userDrop" class="user-content">
                                
                                <p>Hi, {{ auth()->user()->name }}</p>
                                <a href="{{ route('profile')}}">Profile</a>
                                <a href="#about">Logout</a>
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
                <a href="{{ URL::to('auth/google') }}"><i class="fab fa-google"></i>Sign In with Google</a>
                <a href="{{ route('home') }}"><i class="fas fa-home"></i>Home</a>
                <a href="{{ route('posts') }}"><i class="fas fa-newspaper"></i>News</a>
                <a href="animation.html"><i class="fas fa-glass-cheers"></i>Events</a>
                <a href="{{ route('aboutus') }}"><i class="fas fa-address-card"></i>About Us</a>
                
                @guest
                @else
                    @if(auth()->user()->canBeAuthor())
                    <a href="{{ route('admin.dashboard.index') }}"><i class="fas fa-users-cog"></i>Admin</a>
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
