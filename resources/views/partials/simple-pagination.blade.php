@if ($paginator->hasPages())
    <nav
        role="navigation"
        aria-label="{{ __('Pagination Navigation') }}"
        class="flex justify-between items-center"
    >
        <div class="join">
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-outline btn-disabled" disabled>
                    {!! __('pagination.previous') !!}
                </button>
            @else
                <a
                    href="{{ $paginator->previousPageUrl() }}"
                    rel="prev"
                    class="join-item btn btn-outline"
                >
                    {!! __('pagination.previous') !!}
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a
                    href="{{ $paginator->nextPageUrl() }}"
                    rel="next"
                    class="join-item btn btn-outline"
                >
                    {!! __('pagination.next') !!}
                </a>
            @else
                <button class="join-item btn btn-outline btn-disabled" disabled>
                    {!! __('pagination.next') !!}
                </button>
            @endif
        </div>
    </nav>
@endif
@endif