<div class="panel">
    <p class="panel-heading">
        Kategori
    </p>

    @foreach($category as $item)
        <a class="panel-block" href="{{ route('public.blog.category.show', $item->id) }}">
                                <span class="panel-icon">
                                  <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
            {{ $item->name }}
        </a>
    @endforeach
</div>
