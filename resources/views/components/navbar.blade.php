
<!-- effetto sticky navbar -->
<div class="container-fluid container-navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-xl bg-navbar" aria-label="My Navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- inseriamo il logo -->
                <img class="image" src="/img/logo_presto.jpg" alt="logo del sito" id="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <!-- inseriamo una nostra icona -->
                <i id="menu-button" class="fa-solid fa-bars-staggered"></i>
            </button>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('announcements.index')}}">i nostri annunci</a>
                </li>
                
                
                @auth
                
                <li>
                   
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('create')}}">crea un annuncio</a>
                    </li>
                    
                   
                    
                    
                    
                    
                    <li class="nav-item">
                        <p class="nav-link">Benvenuto {{ Auth::user()->name }}</p>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('profile.profile')}}">Vai al tuo profilo</a>
                    </li>
                    
                   
                    @else
                    
                    <li class="nav-item">
                        <p class="nav-link">Benvenuto ospite </p>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">login</a>
                    </li>
                    
                    
                    @endauth
                    @guest
                </li>
                <a class="nav-link" href="{{route('register')}}">registrati</a>
            </li>
            
            @endguest
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Le nostre Categorie
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach($categories as $category)
                    
                    <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                    @endforeach
                </ul>
            </li>
            @auth
              {{-- Form di logout con method post --}}
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li>
                    <button type="submit" class="btn btn-danger w-100">Logout</button>
                </li>
            </form>
            @endauth
            
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('announcements.index')}}">Annunci</a>
                    </li>
                    @auth
                    
                    <li>
                        {{-- Form di logout con method post --}}
                        {{-- <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li>
                                <button type="submit" class="btn btn-danger w-100">Logout</button>
                            </li>
                        </form> --}}
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('create')}}">crea un annuncio</a>
                        </li>
                        
                        
                        
                        
                        
                        <li class="nav-item">
                            <p class="nav-link">Benvenuto {{ Auth::user()->name }}</p>
                        </li>
                        @else
                        
                        
                        
                        
                        
                        
                        @endauth
                        @guest
                    </li>
                    <a class="nav-link" href="{{route('register')}}">registrati</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Le nostre Categorie
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($categories as $category)
                        
                        <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endguest
                
                <!-- <li class="nav-item">
                    <a class="nav-link" href="#aboutUs">
                        <i class="fa-solid fa-moon"></i>
                    </a>
                </li> -->
            </ul>
            <div class="buttonLogout">
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                        <button class="glow-on-hover" type="button">HOVER ME, THEN CLICK ME!</button>
                    
                </form>
                {{-- <button href="{{route('login')}}" class="fa-solid fa-right-to-bracket"></button> --}}
                
                
            </div>
            <div class="">
                <button href="{{route('register')}}" class="glow-on-hover" type="button">Registrati</button>
            </div>   
            
            
            <!-- <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form> -->
        </div>
    </div>
</nav>
</div>






{{-- 
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('announcements.index')}}">i nostri annunci</a>
                    </li>
                    
                    
                    @auth
                    
                    <li>
                        {{-- Form di logout con method post --}}
                        {{-- <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li>
                                <button type="submit" class="btn btn-danger w-100">Logout</button>
                            </li>
                        </form>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('create')}}">crea un annuncio</a>
                        </li>
                        
                        
                        
                        
                        
                        <li class="nav-item">
                            <p class="nav-link">Benvenuto {{ Auth::user()->name }}</p>
                        </li>
                        @else
                        
                        <li class="nav-item">
                            <p class="nav-link">Benvenuto ospite </p>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">login</a>
                        </li>
                        
                        
                        @endauth
                        @guest
                    </li>
                    <a class="nav-link" href="{{route('register')}}">registrati</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Le nostre Categorie
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($categories as $category)
                        
                        <li><a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
                @endguest
                
            </nav>
            
            
            --}}
            