@extends('layouts.dashblog')

@section('title', 'Add Category')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Kategori Baru</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashblog.category.store', ['blogid' => $blogid]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label class="col-form-label">Title</label>
                            <input type="text" class="form-control" placeholder="type title here" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <div class="text-danger" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <textarea type="text" class="form-control" placeholder="type title here" name="description" maxlength="190">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                                <div class="text-danger" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </div>
                            @endif
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-sm-12 col-md-6">
                                <button class="btn btn-primary btn-block">Submit</button>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <button class="btn btn-default btn-block">Back</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('push-head')
    <link rel="stylesheet" href="{{ asset('assets/modules/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/codemirror/theme/duotone-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
@endpush
@push('push-footer')
    <script src="{{ asset('assets/modules/summernote/summernote-bs4.js') }}"></script>
    <script src="{{ asset('assets/modules/codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('assets/modules/codemirror/mode/javascript/javascript.js') }}"></script>
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>
    <script>
        $('#summernote').summernote({
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ],
            dialogsInBody: true,
            minHeight: 250,
        });
    </script>
@endpush