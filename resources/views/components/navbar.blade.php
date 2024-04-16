<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">
        <a class="navbar-brand" href="{{ route('home') }}"><i class="fa-solid fa-cart-shopping"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="nav justify-content-center">
            
            
            @auth
            <li class="nav-item ">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('announcements.index')}}">I nostri articoli</a>
            </li>
            @auth
            <li class="nav-item">
                <a class="nav-link" href="{{route('create')}}">Inserisci un articolo</a>
            </li>               
            
            @endauth
            
            
           
            
            
            
            <li class="nav-item">
           <p class="nav-link"> Ciao {{ Auth::user()->name ?? 'utente' }}</p>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Categorie
           
        </a>
       
          
            
               <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                 @foreach ($categories as $category)
                 <li><a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">{{$category->name}}</a></li>
                 
                 @endforeach
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
            @guest
            <ul class="nav d-flex justify-content-end">
            <li><a class="nav-item text-info" href="{{route('login')}}">Accedi</a></li>
            <li><a class="nav-item text-info" href="{{route('register')}}">Registrati</a></li>
            @else
            <li>
                <form class="text-center" method="POST" action="{{route('logout')}}">
                    @csrf
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </li>
        </ul>
            
            @endguest
        
    </li>
</ul>

</div>
</div>
</nav>