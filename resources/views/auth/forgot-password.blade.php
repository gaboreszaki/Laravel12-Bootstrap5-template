<x-layout.guest toast="true">
    <x-layout.center>
        <div class="row ">
            <div class="col-12 mb-3 ">
                <x-parts.logo width="200" />
            </div>
            @if (session('status'))
                    <div class="col-12 mb-3  fs-5">
                        {{ session('status') }}
                    </div>
            @else
            <form method="post" action="/forgot-password" class="row mx-auto needs-validation" novalidate>
                    {{ csrf_field() }}
                    <div class="col-sm-12 col-md-6 offset-md-3 mb-3">
                        <div class="form-floating ">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="loginEmail" placeholder="name@example.com" aria-describedby="emailValidationFeedback">
                            <label for="loginEmail">Email address</label>
                            @error('email')
                            <div id="emailValidationFeedback" class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <p class="form-text ">To reset your password, Please submit your e-mail</p>
                    </div>
                    <div class="col-sm-12 col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-outline-primary px-5 mb-5">Send Email</button>
                    </div>
            </form>
           @endif
        </div>
    </x-layout.center>
</x-layout.guest>
