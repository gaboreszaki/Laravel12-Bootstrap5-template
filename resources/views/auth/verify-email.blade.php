<x-layout.guest>

    <x-layout.center>

        <div class="row">
            <div class="col-12 mb-3">
                <x-parts.logo class="mb-3" width="200" />
            </div>
            <div class="col-12">
                <h4>Please Verify Your Email</h4>

                <p class="text-muted mb-3">
                    We’ve sent a verification link to your email.<br>
                    To continue, please check your inbox and click the link to verify your email address.
                </p>

                <div class="text-start d-inline-block mb-3">
                    <p class="text-muted">Still waiting?</p>
                    <ul>
                        <li>It might take a couple of minutes to arrive.</li>
                        <li>Don’t forget to check your spam or junk folder.</li>
                    </ul>
                </div>

                <div class="">
                    Didn't get the email?<br>
                    <form action="/email/verification-notification" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-primary px-3">Resend Verification Email</button>
                    </form>


                </div>

            </div>

        </div>

    </x-layout.center>

</x-layout.guest>



