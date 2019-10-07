@extends('layouts.meme')

@section('title', 'Blog')
@section('content')
    <div class="hero is-small is-light is-bold">
        <div class="hero-body has-text-left">
            <div class="container">
                <h1 class="title">
                    Buat Postingan
                </h1>
            </div>
        </div>
    </div>

    <section class="section container">
        <div class="field">
            <label class="label">Judul</label>
            <div class="control">
                <input class="input" type="text" placeholder="Text input">
            </div>
        </div>

        <div class="field">
            <label class="label">Pilih File</label>
            <input type="file" class="input" accept="image/x-png,image/gif,image/jpeg">
            <p class="help is-warning">Hanya mendukung format .jpg, .jpeg, .png, .gif</p>
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
                <button class="button is-link">Submit</button>
            </div>
            <div class="control">
                <button class="button is-text">Cancel</button>
            </div>
        </div>
    </section>
@endsection
@push('push-footer')
@endpush
