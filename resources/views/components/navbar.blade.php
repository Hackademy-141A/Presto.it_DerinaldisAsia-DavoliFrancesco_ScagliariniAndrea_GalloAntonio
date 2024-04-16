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
                    <form method="POST" action="{{ route('logout') }}">
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
        
        
        