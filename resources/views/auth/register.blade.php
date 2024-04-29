<x-layout>
    <div class="container mt-5">
        
        <div class="row d-flex justify-content-center text-center  mt-5">
            <div class="col-md-8">
                <!-- Spazio vuoto per il layout -->
                {{-- <div style="height: 200px"></div> --}}
                
                <!-- Sfondo personalizzato -->
                <div class="custom-bg">
                    <!-- Contenitore del modulo di registrazione -->
                    <div class="form-container">
                        <!-- Gestione degli errori -->
                        <!-- Form di registrazione -->
                        <div class="container">
                            <div class="row d-flex justify-content-center text-center align-items-center">
                                <div class="col-lg-7  mt-5">
                                    <form  class="formRegister" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <h2>{{__('ui.Registrati')}} </h2>
                                        <!-- Campo Nome -->
                                        <div class="mb-3">
                                            <label for="name" class="form-label  mylabel  @error('name') is-invalid @enderror"><h4>{{__('ui.Nome')}}</h4></label>
                                            <input class="myinput " name="name" placeholder="@error('name'){{$message}} @enderror" type="text" class="form-control" id="name">
                                            
                                            
                                            
                                        </div>
                                        <!-- Campo Email -->
                                        <div class="mb-3">
                                            <label for="email" class="form-label mylabel @error('email') is-invalid @enderror"><h4>Email</h4></label>
                                            <input class="myinput" name="email" placeholder="@error('email') {{$message}} @enderror" type="email" class="form-control" id="email">
                                            
                                            
                                            
                                        </div>
                                        
                                        <!-- Campo Password -->
                                        <div class="mb-3">
                                            <label for="password" class="form-label mylabel @error('password') is-invalid @enderror"><h4>Password</h4></label>
                                            <!-- Input password con icona per mostrare/nascondere la password -->
                                            <div class="input-group">
                                                <input class="myinput"  name="password"  placeholder="@error('password') {{$message}} @enderror" class="form-control"type="password" id="passwordField" >
                                                
                                                
                                            </div>
                                            
                                            <input type="checkbox" id="showPasswordCheckbox">
                                            <label for="showPasswordCheckbox">Mostra Password</label>
                                        </div>
                                        
                                        <!-- Conferma Password -->
                                        
                                        <div class="mt-4">
                                            <label for="password_confirmation" class="form-label mylabel @error('password') is-invalid @enderror"><h4>{{__('ui.Conferma Password')}}</h4></label>
                                            <!-- Input password con icona per mostrare/nascondere la password -->
                                            <div class="input-group">
                                                <input class="myinput" name="password_confirmation" placeholder="@error('password') {{$message}} @enderror" class="form-control" type="password" id="passwordField">
                                                
                                            </div>
                                            
                                            
                                            
                                            
                                            <input type="checkbox" id="showPasswordCheckbox">
                                            <label for="showPasswordCheckbox">Mostra Password</label>
                                        </div>
                                        
                                        
                                        
                                        <!-- Bottone di registrazione -->
                                        <button class="mybottone" type="submit" class="btn btn-warning mt-3">{{__('ui.Registrati')}}</button>
                                        <div class="mt-3">
                                            <a class="text-decoration-none anchorRegister" href="{{ route('login') }}">Se sei già registrato clicca qui</a>
                                        </div>
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
        document.getElementById("showPasswordCheckbox").addEventListener("change", function() {
            var passwordField = document.getElementById("passwordField");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        });
    </script>
    
</x-layout>


