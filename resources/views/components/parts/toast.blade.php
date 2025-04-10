@if (session('status'))
    <div class="toast-container position-fixed bottom-0 end-0 p-3">

        <div class="toast align-items-center bg-secondary-subtle border-0" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    @if (session('status') == 'verification-link-sent')
                        A new email verification link has been sent!
                    @else
                        {{ session('status') }}
                    @endif
                </div>
                <button type="button" class="btn btn-link me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"><i class="bi bi-x"></i></button>
            </div>
        </div>
    </div>
@endif
