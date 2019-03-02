@extends('layouts.dashblog')

@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Tambah Postingan</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">usernameblog.domain.com</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Postingan Baru</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group mb-4">
                                        <label class="col-form-label">Title</label>
                                        <input type="text" class="form-control" placeholder="type title here">
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-form-label">Category</label>
                                        <select class="form-control selectric">
                                            <option>Tech</option>
                                            <option>News</option>
                                            <option>Political</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-4">
                                        <label class="col-form-label">Tags</label>
                                        <input type="text" class="form-control inputtags">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group mb-4">
                                        <label class="col-form-label">Thumbnail</label>
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="image" id="image-upload" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="col-form-label">Content</label>
                                <textarea id="summernote" class="summernote"></textarea>
                            </div>
                            <div class="form-group mb-4">
                                <button class="btn btn-primary">Publish</button>
                                <button class="btn btn-info">Save Draft</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                        <div class="card-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('push-head')
    <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush
@push('push-footer')
    <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>


    <script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
    <script>
        $('#summernote').summernote({
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['misc', ['fullscreen']]
            ],
            dialogsInBody: true,
            minHeight: 250,
        });
    </script>
@endpush