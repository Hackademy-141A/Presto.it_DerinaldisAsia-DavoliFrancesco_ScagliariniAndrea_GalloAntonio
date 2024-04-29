<x-layout>
    <h2 class="animated-title text-center display-1">Benvenuto {{ Auth::user()->name }}</h2>
    <div class="container d-flex justify-content-center">
        <div class="row text-center">
            <!-- Titolo e link per creare un nuovo annuncio -->
            
            
            <h4 class="animated-title text-center display-1">I tuoi Annunci</h4> 
            <a class="text-decoration-none "  href="{{ route('create') }}"><button class=" btn btn-warning mt-3 "><h3>{{__('ui.Publica Nuovo Annuncio')}}</h3></button></a> 
            <div class="col-12 text-center abc">
                <div class="row">
                    <!-- Ciclo attraverso gli annunci -->
                    @forelse ($announcements as $announcement)
                    <div class="col-12 col-md-4 py-4"> <!-- Colonne per gestire il layout responsivo -->
                        <div class="card h-100 shadow-sm  ">
                            
                            <img src="{{ !$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/800/603' }}" class="card-img-top" alt="...">
                            
                            <div class="card-body">
                                <h6 class="card-title text-center animated-title3 ">{{$announcement->title}}</h6>
                                <div class="clearfix mb-2">
                                    <span class=" badge rounded-pill bg-warning mb-3 textcustom1">{{$announcement->price}}€</span>
                                    
                                </div>
                                <div>
                                    <span class="card-title "></span> <span class="badge rounded-pill bg-info mb-3 textcustom1">
                                        <a class="text-decoration-none text-black" href="{{ route('categoryShow', ['category' => $announcement->category]) }}">{{__('ui.'. $announcement->category->name )}}</a>
                                    </span>
                                </div>
                                <div class="">
                                    <span class="badge rounded-pill bg-warning mb-3 textcustom1"></span>
                                    <p class="description text-black">{{__('ui.Descrizione')}}: <br> {{ $announcement->description }}</p>
                                </div>
                                
                            </div>
                            <h6 class="d-flex justify-content-center  "> {{__('ui.Publicato')}} : {{ $announcement->user->name }}  {{$announcement->created_at->format('d/m/Y')}}</h6>
                        </div> 
                    </div>
                    
                    @empty
                    <!-- Nessun annuncio trovato -->
                    <div class="col-12">
                        <div class="alert alert-warning py-3 shadow">    
                            <p>{{__('ui.Non abbiamo trovato annunci per questa ricerca')}}</p>
                        </div>
                    </div>
                    @endforelse
                    
                </div>
            </div>
        </div>
    </div>
    
</x-layout>
