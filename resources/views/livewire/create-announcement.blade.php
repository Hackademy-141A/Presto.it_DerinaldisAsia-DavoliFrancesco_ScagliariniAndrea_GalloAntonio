<div>
    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    
    <div class="container">
        <div class="row">
            <div class="col-8">
                <form wire:submit='store' enctype="multipart/form-data">
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input wire:model.blur='title' type="text"
                        class="form-control @error('title') is-invalid @enderror" id="title">
                        @error('title')
                        <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input wire:model.blur='price' type="number"
                        class="form-control @error('price') is-invalid @enderror" id="price">
                        @error('price')
                        <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione dell'articolo</label>
                        <textarea wire:model.blur='description' class="form-control @error('description') is-invalid @enderror" id="description" cols="30"
                        rows="10"></textarea>
                        @error('description')
                        <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    
                    {{-- <div class="mb-3">
                        <label for="tags" class="form-label">Inserisci i tags</label>
                        <input wire:model.blur='tags' type="text"
                        class="form-control @error('tags') is-invalid @enderror" id="tags">
                        <small class="text-info">dividi ogni tag con una virgola</small>
                        @error('tags')
                        <div class="text-danger"> {{ $message }} </div>
                        @enderror
                    </div> --}}
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
            
        </div>
    </div>
</div>
