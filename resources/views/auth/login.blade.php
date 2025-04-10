<x-layout.guest>
    <x-layout.center>
        <form method="post" action="/login" class="needs-validation " novalidate>
            <div class="row">
                <div class="col-12 mb-3">
                    <x-parts.logo width="200" />
                </div>
                <div class="col-sm-12 col-md-4 offset-md-4 ">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="loginEmail" placeholder="name@example.com" aria-describedby="emailValidationFeedback" required>
                        <label for="loginEmail">Email address</label>
                        @error('email')
                        <div id="emailValidationFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 offset-md-4 mb-3">
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" aria-describedby="PasswordValidationFeedback" required >
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div id="PasswordValidationFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                </div>

                {{ csrf_field() }}

                <div class="col-sm-12 col-md-4 offset-md-4">
                    <button type="submit" class="btn btn-outline-primary px-5 mb-5">Login</button>
                    <p class="form-text">
                        Dont have an account? <a href="{{route('register')}}" type="submit" class=" btn-link p-1 m-0">Register</a> for free.<br>

                        Forgot your password? <a href="/forgot-password">Reset Password</a> here.
                    </p>
                </div>

            </div>
        </form>
    </x-layout.center>
</x-layout.guest>
