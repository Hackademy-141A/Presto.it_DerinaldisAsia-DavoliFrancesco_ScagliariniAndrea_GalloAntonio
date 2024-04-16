<x-layout>
    <h2>Annuncio {{$announcement->title}}</h2>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                            <h5 class="card-title">{{$announcement->title}}</h5>
                            <p class="card-text">{{$announcement->price}}</p>
                            <p class="card-text">Pubblicato da:{{$announcement->category->name}}</p>
                            <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                            <p class="card-text">Pubblicato da:{{$announcement->user->name}}</p>

                            <a href="{{route('categoryShow',['category'=>$announcement->category])}}" class="btn btn-primary">Vai al dettaglio</a>
                    </div>
            </div>
            </div>
        </div>
    </div>
</x-layout>