@extends('layouts.group')

@section('title', 'Group & Discussion')
@section('content')
    @auth

        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Grup tempat Anda Menjadi Anggota
                </p>
            </header>
            <div class="card-content">
                <div class="content">
                    <table id="my_group" class="display" style="width:100%">
                        <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks.</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks.</td>
                        </tr>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>Lorem Ipsum adalah contoh teks atau dummy dalam industri percetakan dan penataan huruf atau typesetting. Lorem Ipsum telah menjadi standar contoh teks sejak tahun 1500an, saat seorang tukang cetak yang tidak dikenal mengambil sebuah kumpulan teks.</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endauth
    @guest
    <div class="hero is-medium is-primary">
        <div class="hero-body has-text-centered">
            <div class="container">
                <h1 class="title">
                    Buat Grup Kamu
                </h1>
                <h2 class="subtitle">
                    Buat grup diskusi untuk komunitasmu secara aman dan nyaman.
                </h2>
                <a href="{{ route('dashboard.index') }}" class="button is-info is-inverted">Buat Grup</a>
            </div>
        </div>
    </div>

    <div class="hero is-fullheight is-white">
        <div class="hero-body has-text-left">
            <div class="container">
                <div class="columns">
                    <div class="column is-6">
                        <p class="title">
                            Buat Grup Private atau Publik
                        </p>
                        <p class="subtitle">
                            Anda bebas membuat grup anda menjadi publik atau private.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hero is-fullheight is-light">
        <div class="hero-body has-text-left">
            <div class="container">
                <div class="columns">
                    <div class="column is-6">
                        <p class="title">
                            Jumlah Anggota Unlimited
                        </p>
                        <p class="subtitle">
                            Tidak ada batasan jumlah anggota yang bisa gabung pada grup yang anda buat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="hero is-fullheight is-white">
        <div class="hero-body has-text-left">
            <div class="container">
                <div class="columns">
                    <div class="column is-6">
                        <p class="title">
                            Tanpa Batas
                        </p>
                        <p class="subtitle">
                            Anda bisa membagikan berkas sepuasnya tanpa batasan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="hero is-medium is-primary">
        <div class="hero-body has-text-centered">
            <div class="container">
                <p class="title">
                    Tunggu Apa Lagi?
                </p>
                <p class="subtitle">
                    Buat grup atau gabung ke grup yang sudah ada.
                </p>
            </div>
        </div>
    </div>
    @endguest
@endsection

@push('push-footer')
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#my_group').DataTable({
                "paging":   true,
                "ordering": true,
                "info":     true
            });
        } );
    </script>
    <script src="{{ asset('js/sticky.js') }}"></script>
    <script>
        var sticky = new Sticky('.sticky');
    </script>
@endpush
