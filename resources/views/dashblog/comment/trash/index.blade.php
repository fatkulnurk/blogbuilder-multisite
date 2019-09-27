@extends('layouts.dashblog')

@section('title', 'Trash Comment')

@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Trash Komentar</h4>
                    <div class="card-header-form">
                        <form method="get" action="{{ route('dashblog.comment.index', ['blogid' => $blogid]) }}">
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
                                <th>Comment</th>
                                <td>Status</td>
                            </tr>

                            @foreach($comment as $item)
                                <tr>
                                    <td>{{ (( $comment->currentPage() - 1 ) * $comment->perPage() ) + $loop->iteration }}</td>
                                    <td>{{ $item->user->name }}
                                        <div class="table-links form-inline">
                                            <a onclick="approveData(this)" href="javascript:void(0);" class="text-danger">To Pending
                                                <form action="{{ route('dashblog.comment.update', ['blogid' => $blogid, 'commentId' => $item->id , 'status' => App\Enum\StatusComment::PENDING ]) }}" method="post">
                                                    @csrf
                                                    @method('put')
                                                </form>
                                            </a>
                                            <div class="bullet"></div>
                                            <a onclick="deleteData(this)" href="javascript:void(0);" class="text-danger">Force Delete
                                                <form action="{{ route('dashblog.comment.destroy', ['blogid' => $blogid, 'commentId' => $item->id ]) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <p>{{ $item->body }}</p>
                                    </td>
                                    <td>{!! \App\Enum\StatusComment::getDescriptions($item->status) !!}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>

                <div class="card-footer align-content-center">
                    {{ $comment->links('vendor.pagination.simple-bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('push-footer')

    <script type="text/javascript">
        function deleteData(a) {
            if(confirm("{{ __('dashblog-comment.warning.destroy') }}") == true){
                $(a).find('form').submit();
            }
        }
        
        function approveData(a) {
            if (confirm("{{ __('dashblog-comment.warning.approve') }}") == true) {
                $(a).find('form').submit();
            }
        }
    </script>
@endpush