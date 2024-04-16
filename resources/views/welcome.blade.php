<x-layout>
        @if (session('message'))
        <div class="alert alert-success">
                {{session('message')}}
        </div>
        @endif
        @if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                </ul>
        </div>
        @endif
        <div class="container">
                <div class="row">
                        
                        @foreach ($announcements as $announcement )
                        <div class="col-12 col-md-4 mt-4">
                                <div class="card" style="width: 18rem;">
                                        <img src="https://picsum.photos/200/200" class="card-img-top" alt="...">
                                        <div class="card-body">
                                                <h5 class="card-title">titolo:{{$announcement->title}}</h5>
                                                <p class="card-text">{{$announcement->price}}</p>
                                                <p class="card-text">Categoria:{{$announcement->category->name}}</p>
                                                <p class="card-text">Pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                                                <a href="{{route('announcements.show',compact('announcement'))}}" class="btn btn-primary">Vai al dettaglio</a>
                                        </div>
                                </div>
                        </div>
                        @endforeach
                        
                </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
</x-layout>