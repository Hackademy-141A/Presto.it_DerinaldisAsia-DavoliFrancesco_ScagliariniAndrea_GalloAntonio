<x-layout>
    <x-research></x-research>
    <div class="container d-flex justify-content-center">
        <div class="row text-center">
            <!-- Titolo e link per creare un nuovo annuncio -->
            
            <a class="text-decoration-none"  href="{{ route('create') }}"><button class="dropdown-item1 mt-3"><h2>{{__('ui.Publica Nuovo Annuncio')}}</h2></button></a> 
            <div class="col-12 text-center">
                <div class="row">
                    <!-- Ciclo attraverso gli annunci -->
                    @forelse ($announcements as $announcement)
                    <div class="col-12 col-md-4 py-4"> <!-- Colonne per gestire il layout responsivo -->
                        <div class="card h-100 shadow-sm"> 
                            <img src="https://picsum.photos/300/300" class="card-img-top" alt="...">
                            <div class="card-body"> 
                                <h5 class="card-title text-center">{{$announcement->title}}</h5>
                                <div class="clearfix mb-2">
                                    <span class="float-start badge rounded-pill bg-success">{{$announcement->price}}€</span> 
                                    <h5 class="card-title px-3"> {{__('ui.Publicato')}} : {{ $announcement->user->name }}</h5>
                                </div>
                                <h5 class="card-title text-center">{{__('ui.Categoria')}}: {{$announcement->category->name}}</h5>
                                <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>
                                <p class="card-text">{{__('ui.DataDiPubblicazione')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
                                <div class="d-grid gap-2 my-4"><a href="{{ route('announcements.show', compact('announcement')) }}"  class="btn btn-warning">{{__('ui.Vai al dettaglio')}}</a>
                                </div> 
                            </div>
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