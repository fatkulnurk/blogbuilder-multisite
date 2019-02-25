@extends('layouts.dashboard')

@section('title', 'Create New Blog')

@section('content')
    <div class="card">
                <div class="card-header">
                    <h4>Buat Blog Baru</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Title</label>
                                <input type="text" class="form-control" id="inputEmail4" placeholder="Type here">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Short Description</label>
                                <input type="text" class="form-control" id="inputPassword4" placeholder="Type here">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Subdomain</label>
                                <input type="text" class="form-control" id="inputCity" placeholder="Type here">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="domain">Domain</label>
                                <select id="domain" class="form-control">
                                    @foreach($domains as $domain)
                                        <option value="{{ $domain->id }}">{{ $domain->domain }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="category">Category</label>
                                <select id="category" class="form-control">
                                    @foreach($categorys as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">Description</label>
                            <textarea type="text" class="form-control" id="inputAddress"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Create Blog</button>
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