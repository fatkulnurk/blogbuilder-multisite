@extends('layouts.dashblog')

@section('title', 'Pages')

@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Kelola Halaman</h4>
                    <div class="card-header-form">
                        <form method="get" action="{{ route('dashblog.page.index', ['blogid' => $blogid]) }}">
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
                                <th>#</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Created At</th>
                                <th>Status</th>
                            </tr>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{ (( $pages->currentPage() - 1 ) * $pages->perPage() ) + $loop->iteration }}</td>
                                    <td>{{ $page->title }}
                                        <div class="table-links">
                                            <a href="{{ route('dashblog.page.show', ['blogid' => $blogid, 'pageid' => $page->id]) }}">View</a>
                                            <div class="bullet"></div>
                                            <a href="{{ route('dashblog.page.edit', ['blogid' => $blogid, 'pageid' => $page->id]) }}">Edit</a>
                                            <div class="bullet"></div>
                                            <a onclick="deleteData(this)" href="javascript:void(0);" class="text-danger">Trash
                                                <form action="{{ route('dashblog.page.destroy', ['blogid' => $blogid, 'pageid' => $page->id]) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </a>
                                        </div>
                                    </td>
                                    <td>{{ $page->user->name }}</td>
                                    <td>{{ $page->user->created_at }}</td>
                                    <td>{!! \App\Enum\StatusPageEnum::getDescriptions($page->status) !!}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer">
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
    <script type="text/javascript">
        function deleteData(a) {
            if(confirm("{{ __('dashblog-page.destroy-warning') }}") == true){
                $(a).find('form').submit();
            }
        }
    </script>
@endpush