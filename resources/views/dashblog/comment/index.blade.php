@extends('layouts.dashblog')

@section('title', 'Category')

@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Kategori Postingan</h4>
                    <div class="card-header-form">
                        <form method="get" action="{{ route('dashblog.category.index', ['blogid' => $blogid]) }}">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="title" value="{{ old('title') }}">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th width="10px">#</th>
                                <th width="220px">Name</th>
                                <th>Description</th>
                            </tr>

                            @foreach($category as $item)
                                <tr>
                                    <td>{{ (( $category->currentPage() - 1 ) * $category->perPage() ) + $loop->iteration }}</td>
                                    <td>{{ $item->name }}
                                        <div class="table-links">
                                            <a href="{{ route('dashblog.category.show', ['blogid' => $blogid, 'id' => $item->id]) }}">View</a>
                                            <div class="bullet"></div>
                                            <a href="{{ route('dashblog.category.edit', ['blogid' => $blogid, 'id' => $item->id]) }}">Edit</a>
                                            <div class="bullet"></div>
                                            <a onclick="deleteData(this)" href="javascript:void(0);" class="text-danger">Trash
                                                <form action="{{ route('dashblog.category.destroy', ['blogid' => $blogid, 'categoryid' => $item->id]) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <p>{{ $item->description }}</p>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer align-content-center text-center">
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