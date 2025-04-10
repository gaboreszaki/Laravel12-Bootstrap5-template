<x-layout.guest>
    <x-layout.center>


        <form action="/reset-password" method="post" class="needs-validation " novalidate>
            {{ csrf_field() }}
            <div class="row  ">

                <div class="col-12 mb-3 ">
                    <x-parts.logo width="200" />
                </div>
                <div class="col-sm-12 col-md-4 offset-md-4">
                    <div class="form-floating mb-3">
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">New Password</label>

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
                        <label for="floatingPassword">Verify your new password</label>
                        @error('password_confirmation')
                        <div id="nameFeedback" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <input type="hidden" name="token" value="{{request()->route('token')}}">
                <input type="hidden" name="email" value="{{$request->email}}">
                <div class="col-sm-12 col-md-4 offset-md-4">
                    <div class="form-text">
                        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters.
                    </div>
                </div>

                <div class="col-sm-12 col-md-4 offset-md-4 ">

                    <button class="btn btn-outline-primary  px-5 my-5" type="submit">Set my new Password</button>
                </div>

            </div>
        </form>

    </x-layout.center>
</x-layout.guest>
