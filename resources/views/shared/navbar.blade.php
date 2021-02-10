<nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
    <div class="container">
        <div class="navbar-translate">
            <a class="navbar-brand" href="{{ route('home') }}"><img id="Logo" alt="DSC UoG" src="/Image/DSCLogo.png" height="30px">  DSC UoG (Da Nang Campus)</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                
                <li class="nav-item" active>
                    <a class="nav-link" href="{{ route('home') }}" onclick="scrollToDownload()">
                        <i class="fa fa-home"></i>Trang chủ
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts') }}" onclick="scrollToDownload()">
                        <i class="fa fa-wpforms"></i>Bài viết
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('aboutus') }}" onclick="scrollToDownload()">
                        <i class="fa fa-address-card"></i>Thông tin thêm
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.facebook.com/dsc.uog" target="_blank">
                        <i class="fa fa-facebook-square"></i> Fanpage
                    </a>
                </li>
                @if(!Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ URL::to('auth/google') }}">
                    <i class="fa fa-sign-in"></i>
                    </a>
                </li>
                @else
                @if(auth()->user()->canBeAuthor())
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="fa fa-user"></i></i>Quản trị viên</i>
                    </a>
                </li>
                @endif
                @endif
            </ul>
        </div>
    </div>
</nav>