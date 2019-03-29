@extends('layouts.dashblog')

@section('title', 'Edit Page')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Halaman</h4>
                </div>
                <form method="post" action="{{ route('dashblog.page.update', ['blogid' => $blogid, 'pageid' => $page->id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="col-form-label">Title</label>
                                    <input name="title" type="text" class="form-control" placeholder="type title here" value="{{ old('title', $page->title) }}">
                                </div>

                                <div class="col-md-6">
                                    <label class="col-form-label">Status Page</label>
                                    <select class="form-control selectric" name="status">
                                        @foreach(\App\Enum\StatusPageEnum::getAll() as $key => $value)
                                            <option value="{{ $key }}" @if (old('status', $page->status) == $key)
                                            selected
                                                    @endif>{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-form-label">Content</label>
                            <textarea name="body" class="form-control my-editor">{{ old('body', $page->body) }}</textarea>
                        </div>
                        <div class="form-group mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-primary btn-block">Submit</button>
                                </div>
                                <div class="col-6">
                                    <a href="{{ route('dashblog.page.index', ['blogid' => $blogid]) }}" class="btn btn-light btn-block">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="card-footer bg-light">
                    {{ __('card-footer.page-update') }}
                </div>
            </div>
        </div>
    </div>

@endsection
@push('push-head')
    <link rel="stylesheet" href="{{ asset('assets/modules/jquery-selectric/selectric.css') }}">
@endpush
@push('push-footer')
    <script src="{{ asset('assets/modules/jquery-selectric/jquery.selectric.min.js') }}"></script>


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