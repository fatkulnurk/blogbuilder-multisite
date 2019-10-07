@extends('layouts.meme')

@section('title', 'Blog')
@section('content')
    <div class="hero is-small is-light is-bold">
        <div class="hero-body has-text-left">
            <div class="container">
                <h1 class="title">
                    Kelola Meme
                </h1>
            </div>
        </div>
    </div>

    <section class="section container">

        <div class="list-box">
            <div class="card">
                <div class="card-image">
                    <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/128x128.png" alt="Placeholder image">
                    </figure>
                </div>
                <footer class="card-footer">
                    <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-smile"></i></span> <span>1982</span></a>
                    <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-frown"></i></span> <span>827</span></a>
                    <a href="#" class="card-footer-item"><span class="icon"><i class="far fa-comment"></i></span> <span>Hapus</span></a>
                </footer>
            </div>
        </div>

        <div class="field">
            <label class="label">Judul</label>
            <div class="control">
                <input class="input" type="text" placeholder="Text input">
            </div>
        </div>

        <div class="field">
            <label class="label">Keterangan</label>
            <div class="control">
                <textarea class="textarea" placeholder="Textarea"></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Tags</label>
            <div class="control">
                <input class="input" type="text" placeholder="Text input">
            </div>
            <p class="help is-success">Pisahkan dengan tanda koma, contoh #indonesia, #saya, #terbaru.</p>
        </div>

        <div class="field">
            <label class="label">Sumber</label>
            <div class="control">
                <input class="input" type="text" placeholder="Text input">
            </div>
            <p class="help is-success">Hargai karya orang lain, masukan sumber jika memang bukan buatan kamu.</p>
        </div>


        <div class="field is-grouped">
            <div class="control">
                <button class="button is-link">Posting Meme</button>
            </div>
            <div class="control">
                <a href="{{ route('meme.manage.index') }}" class="button is-text">Cancel</a>
            </div>
        </div>
    </section>
@endsection
@push('push-footer')
@endpush
