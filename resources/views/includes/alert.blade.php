@session('message')
    <div class="alert alert-{{ session('type') }} my-5" role="alert">
        {{ $value }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endsession
