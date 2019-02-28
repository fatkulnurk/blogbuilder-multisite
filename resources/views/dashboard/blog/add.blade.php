@extends('layouts.dashboard')

@section('title', 'Create New Blog')

@section('content')
    <div class="card">
                <div class="card-header">
                    <h4>Buat Blog Baru</h4>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('dashboard.blog.store') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Type here" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <div class="text-danger" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="short_desc">Short Description</label>
                                <input type="text" class="form-control" id="short_desc" placeholder="Type here" name="short_desc" value="{{old('short_desc')}}">

                                @if ($errors->has('short_desc'))
                                    <div class="text-danger" role="alert">
                                        <strong>{{ $errors->first('short_desc') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="subdomain">Subdomain</label>
                                <input type="text" class="form-control" id="subdomain" placeholder="Type here" name="subdomain" value="{{ old('subdomain') }}">

                                @if ($errors->has('subdomain'))
                                    <div class="text-danger" role="alert">
                                        <strong>{{ $errors->first('subdomain') }}</strong>
                                    </div>
                                @endif
                            </div>
                            <div class="form-group col-md-6">
                                <label for="domain">Domain</label>
                                <select id="domain" class="form-control" name="domain">
                                    @foreach($domains as $domain)
                                        <option value="{{ $domain->id }}" @if (old('domain') == $domain->id)
                                            selected
                                        @endif>{{ $domain->domain }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('domain'))
                                    <div class="text-danger" role="alert">
                                        <strong>{{ $errors->first('domain') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="category_blog_id">Category</label>
                                <select id="category_blog_id" class="form-control" name="category_blog_id">
                                    @foreach($categorys as $category)
                                        <option value="{{ $category->id }}" @if (old('category_blog_id') == $category->id)
                                            selected
                                        @endif>{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @if ($errors->has('category_blog_id'))
                                    <div class="text-danger" role="alert">
                                        <strong>{{ $errors->first('category_blog_id') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" class="form-control" id="description" name="description">{{ old('description') }}</textarea>

                            @if ($errors->has('description'))
                                <div class="text-danger" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Create Blog</button>
                    </form>
                </div>
                <div class="card-footer bg-whitesmoke">
                    <b class="text-uppercase">Informasi</b>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </p>
                </div>
            </div>
@endsection

@push('push-footer')
@endpush