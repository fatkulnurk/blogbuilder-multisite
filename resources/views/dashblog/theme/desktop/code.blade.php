@extends('layouts.dashblog')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>{{ App\Enum\TemplateComponentEnum::getDesciptions($type) }}</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('dashblog.theme.desktop.update', ['blogid' => $blogid, 'type' => $type]) }}">
                        @csrf
                        <div class="form-group">

                        <textarea class="codeeditor" name="code" id="code">{!! old('code', $code) !!}</textarea>
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
    <link rel="stylesheet" href="{{ asset('assets/modules/codemirror/lib/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/codemirror/theme/duotone-dark.css') }}">
    <style>
        .CodeMirror {
            border: 1px solid #eee;
            height: 600px !important;
        }
    </style>
@endpush

@push('push-footer')
    <script src="{{ asset('assets/modules/codemirror/lib/codemirror.js') }}"></script>
    <script src="{{ asset('assets/modules/codemirror/mode/javascript/javascript.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/addon/hint/html-hint.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/addon/lint/html-lint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.44.0/mode/htmlembedded/htmlembedded.min.js"></script>

    <script type="text/javascript">
        // var myTextArea = document.getElementById('code');
        // var myCodeMirror = CodeMirror.fromTextArea(myTextArea);
        // CodeMirror.setSize(500, 300);
    </script>
@endpush