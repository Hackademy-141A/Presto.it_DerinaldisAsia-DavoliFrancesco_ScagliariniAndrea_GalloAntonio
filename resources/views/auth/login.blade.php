<x-layout>
    <div class="container">
        <div class="row  d-flex justify-content-center text-center">
            <div class="col-md-5">
                <div style="height: 200px"></div>
                <h2>Accedi</h2>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <input name="password" type="password" class="form-control" id="password">
                            <button class="btn btn-outline-dark bg-primary" type="button" onclick="togglePassword()">Mostra/Nascondi Password</button>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
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
