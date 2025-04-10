<x-layout.guest>

    <x-layout.center>

        <div class="row">
            <div class="col-12">
                <x-parts.logo class="mt-3" width="200" />
            </div>
            <div class="col-sm-12 col-md-4 offset-md-4">

                <div class="card border-0">

                    <div class="card-body">
                        <h5 class="card-title">Under Development</h5>
                        <p class="card-text text-muted">This project is currently in development! using the application in the current state isn't recommended!</p>
                        <div class="d-flex justify-content-center gap-3 ">

                            @if(Auth::check())
                                <a href="{{route('dashboard')}}" class="btn btn-outline-primary px-3">Dashboard</a>
                            @else

                                <a href="{{route('login')}}" class="btn btn-outline-primary px-3">Login</a>
                                <a href="{{route('register')}}" class="btn btn-outline-secondary px-3">Register</a>

                            @endif
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </x-layout.center>

</x-layout.guest>
