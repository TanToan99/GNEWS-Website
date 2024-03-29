<ul class="navbar-nav navbar-sidenav">
    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Back to Home">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fa fa-home" aria-hidden="true"></i>&nbsp;
            <span class="nav-link-text">Back to home</span>
        </a>
    </li>
    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link {{ request()->route()->named('admin.dashboard.*') ? 'active' : '' }}" href="{{ route('admin.dashboard.index') }}">
            <i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp;
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>

    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Posts">
        <a class="nav-link {{ request()->route()->named('admin.posts.*') ? 'active' : '' }}" href="{{ route('admin.posts.index') }}">
            <i class="fa fa-file-text" aria-hidden="true"></i>&nbsp;
            <span class="nav-link-text">Posts</span>
        </a>
    </li>

    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Users">
        <a class="nav-link {{ request()->route()->named('admin.users.*') ? 'active' : '' }}" href="{{ route('admin.users.index') }}">
            <i class="fa fa-users" aria-hidden="true"></i>&nbsp;
            <span class="nav-link-text">Users</span>
        </a>
    </li>
    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Media">
        <a class="nav-link {{ request()->route()->named('admin.media.*') ? 'active' : '' }}" href="{{ route('admin.media.index') }}">
            <i class="fa fa-file" aria-hidden="true"></i>&nbsp;
            <span class="nav-link-text">Media</span>
        </a>
    </li>
    @if(auth()->user()->email == 'toanlntgcd191338@fpt.edu.vn')
    <li class="nav-item" role="presentation" data-toggle="tooltip" data-placement="right" title="Media">
        <a class="nav-link {{ request()->route()->named('admin.gifts.*') ? 'active' : '' }}" href="{{ route('admin.gifts.index') }}">
            <i class="fa fa-file" aria-hidden="true"></i>&nbsp;
            <span class="nav-link-text">Gifts</span>
        </a>
    </li>
    @endif
</ul>
