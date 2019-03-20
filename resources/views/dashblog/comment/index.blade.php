@extends('layouts.dashblog')

@section('title', 'Comment')

@section('content')
    <div class="row mt-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Komentar</h4>
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
                    <div class="container">
                        <form class="form-inline">
                            <label class="sr-only" for="inlineFormInputName2">Name</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">

                            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Username">
                            </div>

                            <div class="form-check mb-2 mr-sm-2">
                                <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                                <label class="form-check-label" for="inlineFormCheck">
                                    Remember me
                                </label>
                            </div>

                            <button type="submit" class="btn btn-primary mb-2">Submit</button>
                        </form>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th width="10px">#</th>
                                <th width="220px">Name</th>
                                <th>Comment</th>
                            </tr>

                            @foreach($comment as $item)
                                <tr>
                                    <td>{{ (( $comment->currentPage() - 1 ) * $comment->perPage() ) + $loop->iteration }}</td>
                                    <td>{{ $item->user->name }}
                                        <div class="table-links">
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
                                        <p>{{ $item->body }}</p>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('push-footer')
@endpush