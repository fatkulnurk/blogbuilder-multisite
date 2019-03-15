<div class="tabs">
    <ul>
        <li class="has-text-weight-bold is-uppercase">Choose Topics</li>
        @foreach(\App\Model\CategoryBlog::all() as $item)
            <li><a href="{{ route('public.topics.show', ['categoryBlogName' => \Illuminate\Support\Str::slug($item->name)]) }}">{{ $item->name }}</a></li>
        @endforeach
    </ul>
</div>