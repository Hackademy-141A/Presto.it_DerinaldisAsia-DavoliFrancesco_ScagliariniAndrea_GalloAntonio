<!-- effetto sticky navbar -->
<div class="container container-navbar">
    <nav class="navbar navbar-expand-xl bg-navbar mynavbar fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- Inseriamo il logo -->
                <img id="logo" class="image" src="/img/logo_presto.jpg" alt="logo del sito">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('announcements.index') }}">Annunci</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create') }}">Crea un annuncio</a>
                </li>
                <li>
                 
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.profile') }}">Vai al profilo</a>
                </li>
                
                @endauth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">Categorie</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach ($categories as $category)
                        <li><a class="dropdown-item"
                            href="{{ route('categoryShow', compact('category')) }}">{{ $category->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
            </ul>
          
                
            
            
            
            
            
            @guest
            <div class="buttonDad d-flex ">
                <a href="{{ route('register') }}" class="glow-on-hover btn btn-outline-primary  "
                type="button">Registrati</a>
                <a href="{{ route('login') }}" class="glow-on-hover btn btn-outline-primary "
                type="button">Accedi</a>
            </div>
         
            
            @endguest
            
            @auth
            
            <div class="mt-3">
                <ul class="nav-item">
                    <a class="nav-link" href="">Benvenuto {{ Auth::user()->name }}</a>
                </ul>
            </div>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class=" mx-3 button display-2 btn btn-outline-primary"><i
                    class="fa-solid fa-right-to-bracket fa-sm" style="color: #c81933;"></i>
                </button>
            </form>

            @if (Auth::user()->is_revisor)
         
            <li>
                <a class="btn-info w-100" href="{{route('revisor.index')}}">Revisore
                <span class="bg-danger">
                    {{App\Models\Announcement::toBeRevisionedCount()}}
                    <span class="visually-hidden">Articoli non revisionati</span>
                    </span>
                </a>

            </li>
            
            @endif
            @endauth
         
        </div>
        
    </div>
</div>
</nav>
</div>
