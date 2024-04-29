<x-layout>
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
              </div>
              
              @endforeach
            </div>
            @else
            <div class="carousel-inner">
              
              <div class="carousel-item active">
                <img src="https://picsum.photos/800/601" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/800/602" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://picsum.photos/800/603" class="d-block w-100" alt="...">
              </div>
            </div>
            
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
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>
