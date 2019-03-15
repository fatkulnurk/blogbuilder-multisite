@extends('layouts.dashblog')

@section('title', 'Edit Post')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Postingan</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dashblog.post.update', ['blogid' => $blogid, 'id' => $post->id]) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group mb-4">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" class="form-control" placeholder="type title here" name="title" value="{{ old('title', $post->title) }}">
                                </div>

                                <div class="form-group mb-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="col-form-label">Category</label>
                                            <select class="form-control selectric" name="category">
                                                @foreach($category as $cat)
                                                    <option value="{{ $cat->id }}" @if (old('category') == $cat->id || $cat->id == $post->category_post_id)
                                                    selected
                                                            @endif>{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="col-form-label">Status Post</label>
                                            <select class="form-control selectric" name="status">
                                                @foreach(\App\Enum\StatusPostEnum::getAll() as $key => $value)
                                                    <option value="{{ $key }}" @if (old('status') == $key || $key == $post->status)
                                                    selected
                                                            @endif>{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="col-form-label">Tags / Label</label>
                                    <input type="text" class="form-control inputtags" name="label" value="{{ old('label', $post->label) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-4">
                                    <label class="col-form-label">Thumbnail (Optional)</label>
                                    <div id="image-preview" class="image-preview" style="background-image: url('{{ \Storage::url($post->thumbnail) }}')">
                                        <label for="image-upload" id="image-label">Choose File</label>
                                        <input value="" type="file" name="image" id="image-upload" />
                                    </div>
                                    <label>Default = Thumbnail sebelumnya.</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-form-label">Content</label>
                            <textarea class="form-control my-editor" name="body">{{ old('body', $post->body) }}</textarea>
                        </div>
                        <div class="form-group mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary btn-block">Submit</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-light btn-block">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>

@endsection
@push('push-head')

    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">

@endpush
@push('push-footer')
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>


    <script src="{{ asset('assets/modules/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/features-post-create.js') }}"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.3/tinymce.min.js"></script>
    <script>
        var editor_config = {
            branding: false,
            height: 320,
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
    </script>
@endpush