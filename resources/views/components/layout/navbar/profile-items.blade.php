<ul class="navbar-nav ">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-circle fs-5 me-2"></i>{{$user->name}}
        </a>
        <ul class="dropdown-menu dropdown-menu-lg-end">
            <li><a class="dropdown-item" href="{{route('settings')}}"><i class="bi bi-gear me-2"></i> Settings</a></li>
            <li>
                <form method="POST" action="{{ route('logout') }}" class="w-full">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">
                        <i class="bi bi-box-arrow-right me-2"></i>
                        Logout
                    </button>
                </form>
            </li>
        </ul>
    </li>
</ul>