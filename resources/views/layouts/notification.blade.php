@if (session('success'))
    <div class="alert alert-light" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session('info'))
    <div class="alert alert-info" role="alert">
        {{ session('info') }}
    </div>
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert">
        <p>{{ session('error') }}</p>
    </div>
@endif