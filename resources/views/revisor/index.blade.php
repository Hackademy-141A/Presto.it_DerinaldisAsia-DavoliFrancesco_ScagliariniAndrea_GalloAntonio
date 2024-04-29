<x-layout>
    <div>
        <!-- Contenitore fluido per adattarsi a diverse dimensioni di schermo -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Titolo condizionale basato sull'esistenza di annunci da controllare -->
                    <h1 class="text-center">
                        {{$announcement_to_check ? 'Annunci da revisionare' : 'Non ci sono annunci da revisionare'}}
                    </h1>
                </div>
            </div>
        </div>
    </div>
    
    @if ($announcement_to_check)
    <!-- Se ci sono annunci da controllare, mostra il carousel e i pulsanti di accettazione e rifiuto -->
    <div class="container ">
        <div class="row ">
            <div class="col-12 mx-3 mt-4 d-flex justify-content-center">
                <!-- Carousel per visualizzare le immagini degli annunci -->
                
                <div class="card prova text-center">
                    <!-- Carousel per le immagini dell'annuncio -->
                    <div id="carouselExampleAutoplaying" class="carousel slide " data-bs-ride="carousel">
                        @if($announcement_to_check->images)
                        <div class="carousel-inner ">
                            @foreach ($announcement_to_check->images as $image)
                            <div class="carousel-item  @if($loop->first)active @endif">
                                <img src="{{$announcement_to_check->images()->first()->getUrl(400,300)}}" class="img-fluid customcarouselimg " alt="">
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
                    <h3 class="card-title text-center animated-title3 mt-1"> {{$announcement_to_check->title}}</h3>
                    <div>
                        <span class="card-title "></span> <span class="badge rounded-pill bg-info mb-3 textcustom1">
                          <a class="text-decoration-none text-black" href="{{ route('categoryShow', ['category' => $announcement_to_check->category]) }}">{{__('ui.'. $announcement_to_check->category->name )}}</a>
                        </span>
                      </div>
                    
                    <div>                    
                       <p class="description text-black">{{__('ui.Descrizione')}} <br> {{$announcement_to_check->description}}</p>
                    </div>
                    <h6 class="d-flex justify-content-center ">{{__('ui.Publicato')}}:{{$announcement_to_check->name}} {{$announcement_to_check->created_at->format('d/m/Y')}}</h6>
                </div>
            </div>
            
            <div class="container">
                <div class="row justify-content-center mt-3">
                    <div class="col-md-1 text-center buttonone">
                        <!-- Form per accettare l'annuncio -->
                        <form action="{{ route('revisor.accept', ['announcement' => $announcement_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-success shadow">{{__('ui.Accetta')}} </button>
                        </form>
                    </div>
                    <div class="col-md-1 text-center buttontwo">
                        <!-- Form per rifiutare l'annuncio -->
                        <form action="{{ route('revisor.reject', ['announcement' => $announcement_to_check]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button type="submit" class="btn btn-danger shadow"> {{__('ui.Rifiuta')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    
</x-layout>