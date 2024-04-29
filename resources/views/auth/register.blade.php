<x-layout>
    <div class="container mt-5">
<<<<<<< HEAD
        
        <div class="row d-flex justify-content-center text-center  mt-5">
            <div class="col-md-8">
                <!-- Spazio vuoto per il layout -->
                {{-- <div style="height: 200px"></div> --}}
                
                <!-- Sfondo personalizzato -->
=======
        <div class="row justify-content-center text-center mt-5">
            <div class="col-md-8">
>>>>>>> 7d3917bf8cd1a77ad17ce52c0cf80ed9cc3fb7a0
                <div class="custom-bg">
                    <div class="form-container">
                        <div class="container">
                            <div class="row justify-content-center text-center align-items-center">
                                <div class="col-lg-7 mt-5">
                                    <form class="formRegister" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <h2>{{__('ui.Registrati')}}</h2>
                                        <div class="mb-3">
                                            <label for="name" class="form-label mylabel @error('name') is-invalid @enderror"><h4>{{__('ui.Nome')}}</h4></label>
                                            <input class="myinput form-control" name="name" placeholder="@error('name'){{$message}} @enderror" type="text" id="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label mylabel @error('email') is-invalid @enderror"><h4>Email</h4></label>
<<<<<<< HEAD
                                            <input class="myinput" name="email" placeholder="@error('email') {{$message}} @enderror" type="email" class="form-control" id="email">
                                            
                                            
                                            
                                        </div>
                                        
                                        <!-- Campo Password -->
=======
                                            <input class="myinput form-control" name="email" placeholder="@error('email') {{$message}} @enderror" type="email" id="email">
                                        </div>
>>>>>>> 7d3917bf8cd1a77ad17ce52c0cf80ed9cc3fb7a0
                                        <div class="mb-3">
                                            <label for="password" class="form-label mylabel @error('password') is-invalid @enderror"><h4>Password</h4></label>
                                            <div class="input-group">
<<<<<<< HEAD
                                                <input class="myinput"  name="password"  placeholder="@error('password') {{$message}} @enderror" class="form-control"type="password" id="passwordField" >
                                                
                                                
=======
                                                <input class="myinput form-control" name="password" placeholder="@error('password') {{$message}} @enderror" type="password" id="passwordField">
>>>>>>> 7d3917bf8cd1a77ad17ce52c0cf80ed9cc3fb7a0
                                            </div>
                                            <input type="checkbox" id="showPasswordCheckbox">
                                            <label for="showPasswordCheckbox">Mostra Password</label>
                                        </div>
<<<<<<< HEAD
                                        
                                        <!-- Conferma Password -->
                                        
                                        <div class="mt-4">
=======
                                        <div class="mb-3">
>>>>>>> 7d3917bf8cd1a77ad17ce52c0cf80ed9cc3fb7a0
                                            <label for="password_confirmation" class="form-label mylabel @error('password') is-invalid @enderror"><h4>{{__('ui.Conferma Password')}}</h4></label>
                                            <div class="input-group">
<<<<<<< HEAD
                                                <input class="myinput" name="password_confirmation" placeholder="@error('password') {{$message}} @enderror" class="form-control" type="password" id="passwordField">
                                                
                                            </div>
                                            
                                            
                                            
                                            
                                            <input type="checkbox" id="showPasswordCheckbox">
                                            <label for="showPasswordCheckbox">Mostra Password</label>
                                        </div>
                                        
                                        
                                        
                                        <!-- Bottone di registrazione -->
                                        <button class="mybottone" type="submit" class="btn btn-warning mt-3">{{__('ui.Registrati')}}</button>
=======
                                                <input class="myinput form-control" name="password_confirmation" placeholder="@error('password') {{$message}} @enderror" type="password" id="passwordField">
                                            </div>
                                            <input type="checkbox" id="showPasswordCheckbox">
                                            <label for="showPasswordCheckbox">Mostra Password</label>
                                        </div>
                                        <button class="mybottone btn btn-warning mt-3" type="submit">{{__('ui.Invia')}}</button>
>>>>>>> 7d3917bf8cd1a77ad17ce52c0cf80ed9cc3fb7a0
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


