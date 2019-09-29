{{--<div class="tabs">--}}
{{--    <ul>--}}
{{--        <li class="has-text-weight-bold is-uppercase"><a href="{{ route('homepage') }}" title="All topics">Choose Topics</a> </li>--}}
{{--        @foreach(\App\Model\CategoryBlog::select('name', 'slug')->get() as $item)--}}
{{--            <li><a href="{{ route('public.topics.show', ['categoryBlogName' => $item->slug]) }}" title="Topics {{ $item->name }}">{{ $item->name }}</a></li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
{{--</div>--}}

<div class="tabs" style="border-bottom: 1px solid black">
    <div class="container">
        <ul style="border-bottom: none !important">
            <li class="has-text-weight-bold is-uppercase"><a href="{{ route('homepage') }}" title="All topics">Choose Topics</a> </li>
            @foreach(\App\Model\CategoryBlog::select('name', 'slug')->get() as $item)
                <li><a href="{{ route('public.topics.show', ['categoryBlogName' => $item->slug]) }}" title="Topics {{ $item->name }}">{{ $item->name }}</a></li>
            @endforeach
        </ul>
    </div>
</div>
