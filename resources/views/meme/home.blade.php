@extends('layouts.meme')

@section('title', 'Blog')
@section('content')
    <div class="hero is-normal is-light">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title">
                    Pusat Meme dan Humor
                </h1>
                <h2 class="subtitle">
                    Terbitkan Meme atau Humor Kamu & Buat semua orang menjadi ketawa.
                </h2>
                <a href="{{ route('dashboard.index') }}" class="button is-info is-inverted">Posting Meme</a>
            </div>
        </div>
    </div>

    <section class="section container">
        <div class="columns">
            <div class="column is-8">
                <div class="list-box">
                    <div class="card">
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
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <footer class="card-footer">
                            <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-smile"></i></span> <span>1982</span></a>
                            <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-frown"></i></span> <span>827</span></a>
                            <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-comment"></i></span> <span>Komentar</span></a>
                        </footer>
                    </div>
                </div>

                <div class="list-box">
                    <div class="card">
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
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <footer class="card-footer">
                            <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-smile"></i></span> <span>1982</span></a>
                            <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-frown"></i></span> <span>827</span></a>
                            <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-comment"></i></span> <span>Komentar</span></a>
                        </footer>
                    </div>
                </div>

                <div class="list-box">
                    <div class="card">
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
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/128x128.png" alt="Placeholder image">
                            </figure>
                        </div>
                        <footer class="card-footer">
                            <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-smile"></i></span> <span>1982</span></a>
                            <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-frown"></i></span> <span>827</span></a>
                            <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-comment"></i></span> <span>Komentar</span></a>
                        </footer>
                    </div>
                </div>

                <div class="card">
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
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/128x128.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <footer class="card-footer">
                        <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-smile"></i></span> <span>1982</span></a>
                        <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-frown"></i></span> <span>827</span></a>
                        <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-comment"></i></span> <span>Komentar</span></a>
                    </footer>
                </div>
            </div>
            <div class="column is-4" data-sticky-container>
                <div class="sticky">
                    <div class="box">
                        <p>
                            Kamu juga bisa posting meme loh, mau coba? klik aja tombol dibawah ini.
                        </p>
                        <br>
                        <p>
                            <a href="" class="button is-danger is-fullwidth">Posting Meme</a>
                        </p>
                    </div>
                    <div class="box">
                        <img src="https://bulma.io/images/placeholders/128x128.png" width="100%">
                    </div>
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
