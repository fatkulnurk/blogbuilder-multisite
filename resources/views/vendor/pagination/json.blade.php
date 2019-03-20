@if ($paginator->hasPages())
{
"first_page_url" => {{ $paginator->onFirstPage() }},
"next_page_url" => {{ $paginator->nextPageUrl() }},
"previous_page_url" => {{ $paginator->previousPageUrl() }},
}
@endif