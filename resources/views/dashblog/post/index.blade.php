@extends('layouts.dashblog')

@section('title', 'All Post')

@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Semua Postingan</h4>
                    <div class="card-header-form">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Created At</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>Laravel 5 Tutorial: Introduction
                                    <div class="table-links">
                                        <a href="#">View</a>
                                        <div class="bullet"></div>
                                        <a href="#">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="#" class="text-danger">Trash</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">Web Developer</a>,
                                    <a href="#">Tutorial</a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-inline-block ml-1">Rizal Fakhri</div>
                                    </a>
                                </td>
                                <td>2018-01-20</td>
                                <td><div class="badge badge-primary">Published</div></td>
                            </tr>
                            <tr>
                                <td>Laravel 5 Tutorial: CRUD
                                    <div class="table-links">
                                        <a href="#">View</a>
                                        <div class="bullet"></div>
                                        <a href="#">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="#" class="text-danger">Trash</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">Web Developer</a>,
                                    <a href="#">Tutorial</a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-inline-block ml-1">Rizal Fakhri</div>
                                    </a>
                                </td>
                                <td>2018-01-20</td>
                                <td><div class="badge badge-danger">Draft</div></td>
                            </tr>
                            <tr>
                                <td>Laravel 5 Tutorial: Deployment
                                    <div class="table-links">
                                        <a href="#">View</a>
                                        <div class="bullet"></div>
                                        <a href="#">Edit</a>
                                        <div class="bullet"></div>
                                        <a href="#" class="text-danger">Trash</a>
                                    </div>
                                </td>
                                <td>
                                    <a href="#">Web Developer</a>,
                                    <a href="#">Tutorial</a>
                                </td>
                                <td>
                                    <a href="#">
                                        <div class="d-inline-block ml-1">Rizal Fakhri</div>
                                    </a>
                                </td>
                                <td>2018-01-20</td>
                                <td><div class="badge badge-warning">Pending</div></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer align-content-center">
                    <nav>
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('push-footer')
@endpush