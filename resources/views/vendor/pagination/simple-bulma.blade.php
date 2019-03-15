@if ($paginator->hasPages())
    <nav class="pagination is-centered columns">
        <div class="column is-3">
            @if ($paginator->onFirstPage())
                <a class="pagination-previous" disabled>Previous</a>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="pagination-previous is-info button">Previous</a>
            @endif
        </div>
        <div class="column is-6">
            <ul class="pagination-list">
                <li><a href="" class="pagination-link is-light">Page {{ $paginator->currentPage() }} / Total {{ (int) ($paginator->total() / $paginator->perPage()) }}</a></li>
            </ul>

        </div>
        <div class="column is-3">
            @if ($paginator->hasMorePages())
                <a class="pagination-nex is-info button" href="{{ $paginator->nextPageUrl() }}" rel="next">Next</a>
            @else
                <a class="pagination-next" disabled>Next page</a>
            @endif
        </div>
    </nav>
@endif