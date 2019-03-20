@if (session('success'))
    <div class="alert alert-success" role="alert">
        <p class="text-black-50 font-weight-bold">{{ session('success') }}</p>
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