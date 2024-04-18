<x-layout>
    <div class="container d-flex justify-content-center">
        <div class="row text-center">
            <h2>Pubblicane uno: <a href="{{route('create')}}">Nuovo annuncio</h2>
            <div class="col-12 text-center">
                <div class="row">
                    @forelse ($announcements as $announcement )
                        <div class="col-12 col-md-4 my-2">
                            <div class="card" style="width: 18rem;">
                                <img src="https://picsum.photos/200/300" class="card-img-top" alt="...">
                                <div class="card-body">
                                        <h5 class="card-title">Titolo: {{$announcement->title}}</h5>
                                        <p class="card-text">Prezzo: {{$announcement->price}}€</p>
                                        <p class="card-text">Descrzione: {{$announcement->description}}</p>
                                        <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                                        <p class="card-text">Pubblicato da:{{$announcement->user->name}}</p>
                                        <a href="{{route('announcements.show',compact('announcement'))}}" class="btn btn-danger">Vai al dettaglio</a>
                                </div>
                        </div>
                        </div>
                        @empty
                        <div class="col-12">
                            <div class="alert alert-warning py-3 shadow">    
                            <p>Non abbiamo trovato annunci per questa ricerca</p>
                        </div>
                        </div>

                    @endforelse
                    
                        {{$announcements->links()}}
                    
                </div>
            </div>
        </div>
    </div>
</x-layout>