<x-layout>
    <div>
        <div class="container-">
            <div class="row">
                <div class="col-12">
                    <h1>
                        {{announcement_to_check ? 'Ecco l\'da revisionare' : 'Non ci sono annunci da revisionare'}}

                    </h1>
                </div>
            </div>
        </div>
        
    </div>
    @if ($announcement_to_ceck)
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200/200" class="img-fluid p-3 randed" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200/200" class="img-fluid p-3 randed" alt="">
                        </div>
                        <div class="carousel-item active">
                            <img src="https://picsum.photos/200/200" class="img-fluid p-3 randed" alt="">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel" data-bs-slide="prev">.
                        <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                        <span class="visually-hidden">Previous </span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel" data-bs-slide="next">.
                        <span class="carousel-control-prev-icon" aria-hidden="true"> </span>
                        <span class="visually-hidden">Previous </span>
                    </button>
                    <h5>Titolo:{{$announcement_to_check->title}}</h5>
                    <p class="card-text">Titolo:{{$announcement_to_check->description}}</p>
                    <p>Titolo:{{$announcement->created_at->format('d/m/Y')}}</p>
                </div>
            
            </div>
           
                <div class="col-12 col-md-6">
                   <form action="{{ route('revisor.accept_announcement'" ,['announcement' =>$announcement_tocheck*)}}   method="POST"">
                    @csrf
                    @method('PATCH')
                    <button type="submit" class="btn btn-success shadow">Accetta</button>

                   </form>
                </div>
                <div class="col-12 col-md-6">
                    <form action="{{ route('revisor.accept_announcement'" ,['announcement' =>$announcement_tocheck*)}}   method="POST"">
                      @csrf
                      @method('PATCH')
                     <button type="submit" class="btn btn-success shadow">Accetta</button>
 
                    </form>
            
        </div>
    </div>            
        @endif
</x-layout>