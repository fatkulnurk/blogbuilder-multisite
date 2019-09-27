@extends('layouts.dashblog')

@section('title', 'Trash Pages')

@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Trash Halaman</h4>
                    <div class="card-header-form">
                        <form method="get" action="{{ route('dashblog.page.index', ['blogid' => $blogid]) }}">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="title" value="{{ old('title', $search) }}">
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
                                                <form action="{{ route('dashblog.page-trash.destroy', ['blogid' => $blogid, 'pageid' => $page->id]) }}" method="post">
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

                <div class="card-footer align-content-center">
                    {{ $pages->links('vendor.pagination.simple-bootstrap-4') }}
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