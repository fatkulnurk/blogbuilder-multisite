@extends('layouts.dashblog')

@section('title', 'Setting Theme')

@section('content')

    <div class="section-body">

        <div class="card">
            <div class="card-header">
                <h4>Pengaturan Theme</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('dashblog.setting.theme.update', $blogid) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Theme Mobile</label>
                                <input type="text" class="form-control" placeholder="type title here" value="Theme Mobile" disabled>
                            </div>
                            <div class="form-group">
                                <label for="status" class="col-form-label">Status [ {{ \App\Enum\StatusTemplateEnum::getDescriptions($blog->template_mobile_status) }} ]</label>
                                <select id="status" class="form-control" name="status">
                                    @foreach($statusTemplate as $key => $item)
                                        <option value="{{ $key }}"@if (old('status', $key) == $blog->template_mobile_status) selected @endif>{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label">Theme Dekstop</label>
                                <input type="text" class="form-control" placeholder="type title here" value="Theme Mobile" disabled>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Status [ {{ \App\Enum\StatusTemplateEnum::getDescriptions($blog->template_dekstop_status) }} ]</label>
                                <select id="status" class="form-control">
                                    <option value="{{ \App\Enum\StatusTemplateEnum::ON }}" selected disabled>{{ \App\Enum\StatusTemplateEnum::getDescriptions($blog->template_dekstop_status) }}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection