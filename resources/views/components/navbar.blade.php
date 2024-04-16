
<!-- effetto sticky navbar -->
<div class="container-fluid container-navbar">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-xl bg-navbar" aria-label="My Navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <!-- inseriamo il logo -->
                <img class="image" src="/img/logo_presto.jpg" alt="logo del sito" id="logo">
            </a>
            {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNavbar" aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <!-- inseriamo una nostra icona -->
                <i id="menu-button" class="fa-solid fa-bars-staggered"></i>
            </button> --}}

   
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
                {{-- <a class="nav-link" href="{{route('register')}}">registrati</a> --}}
         
            
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
           
            @endauth
            
           
          
            <div class="buttonDad d-flex justify-content-end align-items-end">
                <a href="{{route('register')}}" class="glow-on-hover" type="button">Registrati</a>
                <a href="{{route('login')}}" class="glow-on-hover" type="button">Accedi</a>
            
           
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    
                   <button type="submit" class="button display-2 btn btn-outline-primary"><i class="fa-solid fa-right-to-bracket fa-2xs" style="color: #c81933;"></i></button>
                    
                </form>
                {{-- <button href="{{route('login')}}" class="fa-solid fa-right-to-bracket"></button> --}}
                
                
            </div>
            
            <!-- <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form> -->
        </div>
    </div>
</nav>
</div>




            