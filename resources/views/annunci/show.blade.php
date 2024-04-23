<x-layout>
  <!-- Intestazione dell'annuncio -->
  <h2 class="text-center"> {{ $announcement->title }}</h2>
  
  <div class="container">
    <div class="row">
      <!-- Utilizzo di 8 colonne su dispositivi di dimensioni medie e grandi -->
      <div class="col-12 col-md-6 mt-3">
        <div class="card prova">
          <!-- Carousel per le immagini dell'annuncio -->
          <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
            @if($announcement->images)
            <div class="carousel-inner ">
              @foreach ($announcement->images as $image)
              <div class="carousel-item  @if($loop->first)active @endif">
                <img src="{{$announcement->images()->first()->getUrl(400,300)}} " class="card-img-top customcarouselimg " alt="">
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
          <div class="card-body">
            <!-- Informazioni sull'annuncio -->
            <h3>Titolo: {{ $announcement->title }}</h3>
            <span class="card-text btn-warning p-1">{{__('ui.Prezzo')}}: {{ $announcement->price }}$</span>
            <p class="card-text mt-4">{{__('ui.Categoria')}}: {{ $announcement->category->name }}</p>
            <p class="card-title">{{$announcement->description}}</p>
            <p class="card-text"> {{__('ui.Publicato')}}: {{ $announcement->created_at->format('d/m/Y') }}</p>
            <p class="card-text"> {{__('ui.Publicato')}}: {{ $announcement->user->name }}</p>
            <!-- Pulsanti di navigazione -->
            <a href="{{ route('categoryShow', ['category' => $announcement->category]) }}" class="btn mybtn">{{__('ui.Vai alle categorie')}} </a>
            <a href="{{ route('home') }}" class="btn btn-danger mt-2 mybtnone">{{__('ui.Torna indietro')}}</a>
          </div>
        </div>
      </div>
      <!-- La parte successiva del layout può essere aggiunta qui -->
    </div>
  </div>
</x-layout>
