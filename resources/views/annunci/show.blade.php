<x-layout>
  <!-- Intestazione dell'annuncio -->
  <h2 class="text-center"> {{ $announcement->title }}</h2>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-12 d-flex justify-content-center">
        
        
        <div class="card prova">
          <!-- Carousel per le immagini dell'annuncio -->
          <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
            @if($announcement->images)
            <div class="carousel-inner ">
              @foreach ($announcement->images as $image)
              <div class="carousel-item  @if($loop->first)active @endif">
                <img src="{{$announcement->images()->first()->getUrl(400,300)}}" class="img-fluid customcarouselimg " alt="">
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
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <!-- Dettagli dell'annuncio -->
          
        </div>
      </div>
      <div class="col-8 col-md-12 mt-3">
        <div class="card h-100 shadow-sm">
          <div class="card-body"> 
            <h3 class="card-title text-center  rounded-pill bg-info">Titolo: {{$announcement->title}}</h3>
            <div class="clearfix mb-2">
              <span class="float-start">Prezzo:</span><span class="float-start badge rounded-pill bg-success">{{$announcement->price}}€</span> 
            </div>
            <span class="card-title mt-5">{{__('ui.Categoria')}}:</span> <span class="badge rounded-pill bg-warning mb-3 textcustom1"> <a class="text-decoration-none" href="{{ route('categoryShow', ['category' => $announcement->category]) }}">{{__('ui.'. $announcement->category->name )}}</a>
            </span>
            <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
            <p class="card-text">{{__('ui.DataDiPubblicazione')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
            <h5 class="card-title"> {{__('ui.Publicato')}} : {{ $announcement->user->name }}</h5>
            <div class="d-grid gap-2 my-4"><a href="{{ route('announcements.index')}}"  class="btn btn-warning">{{__('ui.Torna indietro')}}</a>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>
