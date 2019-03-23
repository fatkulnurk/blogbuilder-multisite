@extends('layouts.dashblog')

@section('title', 'Publish Post')

@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Postingan Terpublish</h4>
                    <div class="card-header-form">
                        <form action="{{ route('dashblog.post.index', ['blogid' => $blogid]) }}" method="get">
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
                                <th>Title</th>
                                <th>Category</th>
                                <th>Author</th>
                                <th>Created At</th>
                                <th>Status</th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{ $post->title }}
                                        <div class="table-links">
                                            <a href="{{ route('dashblog.post.show', ['blogid' => $blogid, 'id' => $post->id]) }}">View</a>
                                            <div class="bullet"></div>
                                            <a href="{{ route('dashblog.post.edit', ['blogid' => $blogid, 'id' => $post->id]) }}">Edit</a>
                                            <div class="bullet"></div>
                                            <a onclick="deleteData(this)" href="javascript:void(0);" class="text-danger">Trash
                                                <form action="{{ route('dashblog.post.destroy', ['blogid' => $blogid, 'postid' => $post->id]) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                </form>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="#">{{ optional($post->categoryPost)->name }}</a>
                                    </td>
                                    <td>
                                        <a href="#">
                                            <div class="d-inline-block ml-1">{{ $post->user->name }}</div>
                                        </a>
                                    </td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>{!! \App\Enum\StatusPostEnum::getDescriptions($post->status) !!}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer align-content-center">
                    {{ $posts->links('vendor.pagination.simple-bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('push-footer')
    <script type="text/javascript">
        function deleteData(a) {
            if(confirm("{{ __('dashblog-post.destroy-warning') }}") == true){
                $(a).find('form').submit();
            }
        }
    </script>
@endpush