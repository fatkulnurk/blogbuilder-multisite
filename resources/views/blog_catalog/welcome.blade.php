@extends('layouts.blog_catalog')

@section('title', 'Blog')
@section('content')
    <div class="hero is-fullheight is-info">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title">
                    Publikasikan tulisan Anda, sesuai selera anda
                </h1>
                <h2 class="subtitle">Buat blog dan terhubung ke teman baru secara gratis.</h2>
                <a href="{{ route('dashboard.index') }}" class="button is-info is-inverted">Buat Blog</a>
            </div>
        </div>
    </div>

    <div class="hero is-fullheight is-danger">
        <div class="hero-body has-text-left">
            <div class="container">
                <div class="columns">
                    <div class="column is-6">
                        <p class="title">
                            Pilih desain yang sempurna
                        </p>
                        <p class="subtitle">
                            Buat blog yang menarik sesuai gaya Anda. Pilih dari koleksi template yang mudah digunakan, dengan tata letak fleksibel dan ratusan gambar latar, atau buat desain template baru.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero is-fullheight is-dark">
        <div class="hero-body has-text-left">
            <div class="container">
                <div class="columns">
                    <div class="column is-6">
                        <p class="title">
                            Dapatkan domain gratis
                        </p>
                        <p class="subtitle">
                            Berikan rumah yang sempurna untuk blog Anda. Dapatkan domain dibumi.com gratis atau beli domain khusus cukup dengan beberapa klik.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero is-fullheight is-success">
        <div class="hero-body has-text-left">
            <div class="container">
                <div class="columns">
                    <div class="column is-6">
                        <p class="title">
                            Bergabunglah dengan jutaan orang lain
                        </p>
                        <p class="subtitle">
                            Ingin berbagi keahlian, berita terkini, atau apa pun pendapat Anda? Ada banyak orang yang melakukan hal yang sama di Blogger. Segeralah mendaftar. Cari tahu mengapa ada jutaan orang yang memublikasikan konten favoritnya di sini.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('push-footer')
    <script src="{{ asset('js/sticky.js') }}"></script>
    <script>
        var sticky = new Sticky('.sticky');
    </script>
@endpush
