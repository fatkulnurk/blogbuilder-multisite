@extends('layouts.meme')

@section('title', 'Blog')
@section('content')
    <section class="section">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <header class="card-header">
                    <p class="card-header-title">
                        Fatkul Nur Koirudin
                    </p>
                    <a href="#" class="card-header-icon" aria-label="more options">
                          <span class="icon">
                            <i class="fas fa-user" aria-hidden="true"></i>
                          </span>
                    </a>
                </header>
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/128x128.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <b>Ini Judulnya, Entah apa yang kamu tulis</b>
                            <br>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                            </p>
                            contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks dan mengacaknya untuk menjadi sebuah buku contoh huruf. Ia tidak hanya bertahan selama 5 abad, tapi juga telah beralih ke penataan huruf elektronik, tanpa ada perubahan apapun. Ia mulai dipopulerkan pada tahun 1960 dengan diluncurkannya lembaran-lembaran Letraset yang menggunakan kalimat-kalimat dari Lorem Ipsum, dan seiring munculnya perangkat lunak Desktop Publishing seperti Aldus PageMaker juga memiliki versi Lorem Ipsum.
                            <br>
                            <a href="#">#indonesia</a> <a href="#">#css</a> <a href="#">#responsive</a>
                            <br>
                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-smile"></i></span> <span>1982</span></a>
                        <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-frown"></i></span> <span>827</span></a>
                        <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-comment"></i></span> <span>Laporkan</span></a>
                        <a href="#" class="card-footer-item"><span class="icon"><i class="fas fa-share-alt"></i></span> <span>Share</span></a>
                    </footer>
                </div>
            </div>
        </div>
    </section>

@endsection
@push('push-footer')
    <script src="{{ asset('js/sticky.js') }}"></script>
    <script>
        var sticky = new Sticky('.sticky');
    </script>
@endpush
