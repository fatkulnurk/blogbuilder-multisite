<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Laravel Filemanager</title>

</head>
<body>
{{--<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.9.3/tinymce.min.js"></script>
<textarea name="content" class="form-control my-editor"></textarea>
<script>
    var editor_config = {
        branding: false,
        height: 500,
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
{{--<!-- dependencies (Summernote depends on Bootstrap & jQuery) -->--}}
{{--<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">--}}
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>--}}
{{--<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>--}}

{{--<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">--}}
{{--<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>--}}

{{--<!-- markup -->--}}
{{--<textarea id="summernote-editor" name="content"></textarea>--}}

{{--<!-- summernote config -->--}}
{{--<script>--}}
    {{--$(document).ready(function(){--}}

        {{--// Define function to open filemanager window--}}
        {{--var lfm = function(options, cb) {--}}
            {{--var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';--}}
            {{--window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');--}}
            {{--window.SetUrl = cb;--}}
        {{--};--}}

        {{--// Define LFM summernote button--}}
        {{--var LFMButton = function(context) {--}}
            {{--var ui = $.summernote.ui;--}}
            {{--var button = ui.button({--}}
                {{--contents: '<i class="note-icon-picture"></i> ',--}}
                {{--tooltip: 'Insert image with filemanager',--}}
                {{--click: function() {--}}

                    {{--lfm({type: 'image', prefix: '/laravel-filemanager'}, function(lfmItems, path) {--}}
                        {{--lfmItems.forEach(function (lfmItem) {--}}
                            {{--context.invoke('insertImage', lfmItem.url);--}}
                        {{--});--}}
                    {{--});--}}

                {{--}--}}
            {{--});--}}
            {{--return button.render();--}}
        {{--};--}}

        {{--// Initialize summernote with LFM button in the popover button group--}}
        {{--// Please note that you can add this button to any other button group you'd like--}}
        {{--$('#summernote-editor').summernote({--}}
            {{--toolbar: [--}}
                {{--['popovers', ['lfm']],--}}
            {{--],--}}
            {{--buttons: {--}}
                {{--lfm: LFMButton--}}
            {{--}--}}
        {{--})--}}
    {{--});--}}
{{--</script>--}}

</body>
</html>