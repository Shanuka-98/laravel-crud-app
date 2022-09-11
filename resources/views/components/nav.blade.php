<nav class="navbar navbar-expand bg-transparent text-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand img" href='{{ route('home') }}'>Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Students
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('students.add') }}">Add</a></li>

                        <li><a class="dropdown-item" href="{{ route('students.view') }}">View</a></li>

                        <li><a class="dropdown-item" href="{{ route('students.edit') }}">Update/Delete</a></li>

                    </ul>
                </li>
            </ul>
            {{-- <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form> --}}
            @if (auth()->id())
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                this.closest('form').submit(); " role="button">
                        <i class="fas fa-sign-out-alt"></i>

                        {{ __('Log Out') }}
                    </a>
                </div>
            </form>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}" role="button">
                    <i class="fas fa-sign-in-alt"></i>
                    Login
                </a>
            </li>
        @endif
        </div>
    </div>
</nav>
