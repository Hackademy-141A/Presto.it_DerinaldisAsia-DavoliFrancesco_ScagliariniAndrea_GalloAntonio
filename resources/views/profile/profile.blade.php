<x-layout>
    <h2 class="text-center display-1">I miei annunci</h2>
    <div class="container">
        
        
        <div class="row">
            @forelse ($announcements as $announcement)
            <div class="col-12 col-md-6 col-lg-4 my-2">
                <!-- Card per ogni annuncio -->
                <div class="card">
                    <!-- Immagine dell'annuncio (utilizza una dimensione fissa per migliorare le prestazioni del caricamento della pagina) -->
                    <img src="{{!$announcement->images()->get()->isEmpty() ?  $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/800/603'}}" class="card-img-top" alt="Placeholder">
                    <div class="card-body">
                        <!-- Titolo dell'annuncio -->
                        <h5 class="card-title">{{__('ui.Titolo')}}: {{ $announcement->title }}</h5>
                        <!-- Prezzo dell'annuncio -->
                        <p class="card-text">{{__('ui.Prezzo')}}:{{ $announcement->price }}$</p>
                        <!-- Descrizione dell'annuncio -->
                        <p class="card-text">{{__('ui.Descrizione')}}: {{ $announcement->description }}</p>
                        <!-- Data di pubblicazione dell'annuncio -->
                        <p class="card-text">{{__('ui.DataDiPubblicazione')}}: {{ $announcement->created_at->format('d/m/Y') }}</p>
                        <!-- Nome dell'utente che ha pubblicato l'annuncio -->
                        <p class="card-text">{{__('ui.Publicato')}}: {{ $announcement->user->name }}</p>
                        <!-- Link per visualizzare i dettagli dell'annuncio -->
                        <a href="{{ route('announcements.show', compact('announcement')) }}" class="btn btn-danger">{{__('ui.Vai al dettaglio')}}</a>
                    </div>
                </div>
            </div>
            @empty
            <!-- Messaggio visualizzato se non ci sono annunci -->
            <p class="col-12 bg-info text-white text-bold">{{__('ui.Non hai ancora pubblicato niente')}}</p>
            @endforelse
        </div>
    </div>
    
</x-layout>
