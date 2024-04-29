<x-layout>
<<<<<<< HEAD
  <!-- Intestazione dell'annuncio -->
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-12 d-flex justify-content-center">
        
        
        <div class="card prova">
          <!-- Carousel per le immagini dell'annuncio -->
          <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
            @if($announcement->images)
            <div class="container carousel-inner ">
              @foreach ($announcement->images as $image)
              <div class="carousel-item  @if($loop->first)active @endif">
                
                <img src="{{$announcement->images()->first()->getUrl(400,300)}}" class="img-fluid customcarouselimg " alt="">
                <p class=" price badge  bg-success">{{$announcement->price}}€</p>
=======
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <div class="card shadow">
          <div class="card-body d-flex flex-column justify-content-center align-items-center">
            <!-- Carousel per le immagini dell'annuncio -->
            <div id="carouselExampleAutoplaying" class="carousel slide mb-4" data-bs-ride="carousel">
              <div class="carousel-inner">
                @if($announcement->images)
                  @foreach ($announcement->images as $image)
                    <div class="carousel-item @if($loop->first)active @endif">
                      <img src="{{$announcement->images()->first()->getUrl(400,300)}}" class="d-block w-100" alt="">
                      <p class="price badge bg-success">{{$announcement->price}}€</p>
                    </div>
                  @endforeach
                @else
                  <div class="carousel-item active">
                    <img src="https://picsum.photos/800/601" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/800/602" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="https://picsum.photos/800/603" class="d-block w-100" alt="...">
                  </div>
                @endif
>>>>>>> 7d3917bf8cd1a77ad17ce52c0cf80ed9cc3fb7a0
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- Dettagli dell'annuncio -->
            <h1 class="card-title text-center mb-4">{{ $announcement->title }}</h1> <!-- Aggiunto mb-4 per dare spazio sotto il titolo -->
            <div class="mb-2">
              <span class="badge bg-warning text-dark">
                <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}" class="text-decoration-none">{{ __('ui.' . $announcement->category->name) }}</a>
              </span>
            </div>
<<<<<<< HEAD
            
            @endif
            
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- Dettagli dell'annuncio -->
          
        </div>
      </div>
      <div class=" container col-8 col-md-12 mt-3 text-center card-prova">
        <div class="card h-100 shadow-sm">
          <div class="card-body"> 
            <h2 class="text-center"> {{ $announcement->title }}</h2>
            <div class="clearfix mb-2">
              
            </div>
            <span class="card-title mt-5"></span> <span class="badge rounded-pill bg-warning mb-3 textcustom1">
              <a class="text-decoration-none" href="{{ route('categoryShow', ['category' => $announcement->category]) }}">{{__('ui.'. $announcement->category->name )}}</a>
            </span>
            <h5 class="card-title">{{$announcement->description}} </h5>
            
            
            <div class="d-grid gap-2 my-4"><a href="{{ route('announcements.index')}}"  class="btn btn-warning">{{__('ui.Torna indietro')}}</a></div>
            <p class="card-title"> {{__('ui.Publicato')}} : {{ $announcement->user->name }} in data {{$announcement->created_at->format('d/m/Y')}}</p>
=======
            <p class="card-text">{{ $announcement->description }}</p>
            <div class="d-grid gap-2 mt-4">
              <a href="{{ route('announcements.index') }}" class="btn btn-warning">{{ __('ui.Torna indietro') }}</a>
            </div>
            <p class="card-text text-center mt-3">{{ __('ui.Publicato') }}: {{ $announcement->user->name }} {{ $announcement->created_at->format('d/m/Y') }}</p>
>>>>>>> 7d3917bf8cd1a77ad17ce52c0cf80ed9cc3fb7a0
          </div>
        </div>
      </div>
    </div>
  </div>
  
</x-layout>
  