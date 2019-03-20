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
                        <tr>
                            <td>code_header</td>
                            <td><button class="btn btn-primary btn-block">Edit</button></td>
                        </tr>
                        <tr>
                            <td>code_index</td>
                            <td><button class="btn btn-primary btn-block">Edit</button></td>
                        </tr>
                        <tr>
                            <td>code_post</td>
                            <td><button class="btn btn-primary btn-block">Edit</button></td>
                        </tr>
                        <tr>
                            <td>code_page</td>
                            <td><button class="btn btn-primary btn-block">Edit</button></td>
                        </tr>
                        <tr>
                            <td>code_category</td>
                            <td><button class="btn btn-primary btn-block">Edit</button></td>
                        </tr>
                        <tr>
                            <td>code_search</td>
                            <td><button class="btn btn-primary btn-block">Edit</button></td>
                        </tr>
                        <tr>
                            <td>code_footer</td>
                            <td><button class="btn btn-primary btn-block">Edit</button></td>
                        </tr>
                        <tr>
                            <td>style.css</td>
                            <td><button class="btn btn-primary btn-block">Edit</button></td>
                        </tr>
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