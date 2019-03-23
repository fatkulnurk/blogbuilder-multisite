@extends('layouts.dashblog')

@section('title', 'Setting Information')

@section('content')

        <div class="section-body">

            <div class="card">
                <div class="card-header">
                    <h4>Tambah Kategori Baru</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('dashblog.setting.information.update', $blogid) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-form-label">Subdomain</label>
                                <input type="text" class="form-control" placeholder="type title here" name="name" value="{{ $blog->subdomain }}" disabled>
                            </div>
                            <div class="col-md-6">
                                <label class="col-form-label">Domain</label>
                                <input type="text" class="form-control" placeholder="type title here" name="name" value="{{ $blog->domain->domain }}" disabled>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" class="form-control" placeholder="type title here" name="title" value="{{ old('title', $blog->title) }}">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Short Description</label>
                                    <input type="text" class="form-control" placeholder="type title here" name="short_desc" value="{{ old('short_desc', $blog->short_desc) }}">
                                </div>
                                <div class="form-group">
                                    <label for="category_blog_id">Category</label>
                                    <select id="category_blog_id" class="form-control selectric" name="category_blog_id">
                                        @foreach($categorys as $category)
                                            <option value="{{ $category->id }}" @if (old('category_blog_id', $blog->category_blog_id) == $category->id)
                                            selected
                                                    @endif>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label class="col-form-label">Logo [ @if ($blog->logo)
                                            <b>Sudah ada logo</b> [ <a href="{{ route('content.images.thumbnail.blog', $blogid) }}">lihat</a> ]
                                                                             @else
                                                                             Belum ada logo
                                    @endif ]</label>

                                    <div id="image-preview" class="image-preview">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input type="file" accept='image/*' name="logo" id="image-upload" />
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Description</label>
                            <textarea type="text" class="form-control" placeholder="type title here" name="description" maxlength="190">{{ old('description', $blog->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection


@push('push-head')

    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">

@endpush
@push('push-footer')
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>


    <script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>
@endpush