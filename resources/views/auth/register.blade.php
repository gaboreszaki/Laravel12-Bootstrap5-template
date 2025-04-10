<x-layout.guest>
    <x-layout.center>
        <form action="/register" method="post" class="needs-validation " novalidate>
            {{ csrf_field() }}
            <div class="row row-cols-1 ">

                <div class="col-sm-12 col-md-4 offset-md-4 mb-3 ">
                    <x-parts.logo width="200" />
                </div>
                <div class="col-sm-12 col-md-4 offset-md-4">
                    <div class="form-floating mb-3">
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Full name">
                        <label for="name">Full name</label>
                        @error('name')
                        <div id="nameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 offset-md-4">
                    <div class="form-floating mb-3">
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com">
                        <label for="email">Email address</label>
                        @error('email')
                        <div id="nameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 offset-md-4">
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>

                        @error('password')
                        <div id="nameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 offset-md-4">
                    <div class="form-floating">
                        <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingPassword" placeholder="Verify your Password">
                        <label for="floatingPassword">Verify your Password</label>
                        @error('password_confirmation')
                        <div id="nameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 offset-md-4">
                    <div class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters.
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 offset-md-4 ">
                    <button class="btn btn-outline-primary  px-5 my-5" type="submit">Register</button>
                </div>

                <div class="col-sm-12 col-md-4 offset-md-4">
                   <p class="form-text">
                       Already have an account? <a href="{{route("login")}}" class="btn-link">Login </a> here
                   </p>
                </div>
            </div>
        </form>

    </x-layout.center>
</x-layout.guest>
