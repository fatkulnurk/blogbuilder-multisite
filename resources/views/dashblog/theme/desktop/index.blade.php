@extends('layouts.dashblog')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Theme Desktop</h4>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">Component</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($templateComponent as $key => $tmpl)
                            <tr>
                                <td>{{ $tmpl }}</td>
                                <td><a href="{{ route('dashblog.theme.desktop.edit', ['blogid' => $blogid, 'type' => $key]) }}" class="btn btn-primary btn-block">Edit</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <form method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group mb-4">
                                    <label class="col-form-label">Title</label>
                                    <input type="text" class="form-control" placeholder="type title here" name="title" value="{{ old('title') }}">
                                </div>
                            </div>
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