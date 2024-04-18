<x-layout>
    @if (session('message'))
    <div class="alert alert-danger">
            {{session('message')}}
    </div>
    @endif
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-5 text-center">
                <form method="POST" action="{{ route('contact.submit') }}">

                    @csrf

                    <div class="mb-3">
                        <label for="inputEmail" class="form-label">Inserisci la tua email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail">
                    </div>

                    <div class="mb-3">
                        <label for="inputName" class="form-label">Nome</label>
                        <input name="name" type="text" class="form-control" id="inputName">
                    </div>

                    <div class="mb-3">
                        <label for="inputMessage" class="form-label">Inserisci il tuo messaggio</label>
                        <textarea name="body" type="text" class="form-control" id="inputMessage" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Invia il messaggio</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>