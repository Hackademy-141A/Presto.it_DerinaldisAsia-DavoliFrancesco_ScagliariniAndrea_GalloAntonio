<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">
        <a class="navbar-brand" href="{{ route('home') }}">Fumetland</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            
            @auth
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('create')}}">Inserisci un articolo</a>
            </li>               
            
            @endauth
            
            
            <li class="nav-item">
                <a class="nav-link" href="">I nostri articoli</a>
            </li>
            
            
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                
                Ciao {{ Auth::user()->name ?? 'utente' }}
            </a>
            <ul class="dropdown-menu">
                @guest
                
                <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                @else
                <li>
                    <form class="text-center" method="POST" action="{{route('logout')}}">
                        @csrf
                        <button class="btn btn-danger" type="submit">Logout</button>
                    </form>
                </li>
                @endguest
            </ul>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> --}}
    </ul>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
</div>
</div>
</nav>