<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-2 text-white">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pl-5" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('posts')}}">Posts</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{auth()->user()->name}}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-outlin-primary nav-link" value="Log Out">
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('register')}}">Register</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>