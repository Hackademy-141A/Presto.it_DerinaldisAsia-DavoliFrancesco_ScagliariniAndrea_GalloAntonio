<x-layout>
    <div class="container">
        <div class="row  d-flex justify-content-center text-center">
            <div class="col-md-8">
                <div style="height: 200px"></div>

                <div class="custom-bg">
                    <div class="form-container">
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
                            <div class="row d-flex justify-content-center text-center  align-items-center">
                                <div class="col-lg-7">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Nome</label>
                                            <input name="name" placeholder="Nome" type="text" class="form-control" id="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email</label>
                                            <input name="email" placeholder="Email" type="email" class="form-control" id="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input name="password" placeholder="Password" type="password" class="form-control" id="password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="password_confirmation" class="form-label">
                                               </label>
                                                 
                                            <input name="password_confirmation" placeholder="Conferma Password"  type="password" class="form-control"
                                                id="password_confimation">
                                              
                                        </div>
                                        <button type="submit" class="btn btn-primary">Registrati</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePassword() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    
    </script>
</x-layout>
