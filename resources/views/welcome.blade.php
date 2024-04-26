<x-layout>
    <x-header></x-header>
    
   
                
                <div class="container d-flex justify-content-center">
                    <div class="row text-center">
                        
                        {{-- <h2  class="display-1 animated-title">{{__('ui.welcome')}}</h2> --}}
                        
                        <h2 class="text-center animated-title glowing-btn">{{__('ui.our latest announcements')}}</h2>
                        
                        @foreach ($announcements as $announcement)
                        <!-- Ciclo attraverso gli annunci -->
                        <div class="col-12 col-md-4 py-4"> <!-- Colonne per gestire il layout responsivo -->
                            
                            <div class="card h-100 shadow-sm"> 
                                <img src={{!$announcement->images()->get()->isEmpty() ?  $announcement->images()->first()->getUrl(400,300) : 'https://picsum.photos/800/603'}} class="card-img-top" alt="...">
                                <div class="card-body"> 
                                    <h5 class="card-title text-center">{{$announcement->title}}</h5>
                                    <div class="clearfix mb-2">
                                        <span class="float-start badge rounded-pill bg-success">{{$announcement->price}}€</span> 
                                        <h5 class="card-title px-3">{{__('ui.Publicato')}} : {{($announcement->user->name)}}</h5>
                                    </div>
                                    <h5 class="card-title text-center">{{__('ui.Categoria')}}  : {{__('ui.'.$announcement->category->name)}}</h5>
                                    
                                    <p class="card-text">{{__('ui.DataDiPubblicazione')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
                                    <div class="d-grid gap-2 my-4"><a href="{{ route('announcements.show', compact('announcement')) }}"  class="btn btn-warning">{{__('ui.Vai al dettaglio')}}</a>
                                    </div> 
                                </div>
                            </div> 
                        </div>
                        
                        @endforeach
                    </div>
                </div>
                
                
                <x-aboutUs
                
                
                
                
                />
                
                
            </div>
        </div>
    </div>
</x-layout>
