@if ($paginator->hasPages())
    <nav class="flex justify-center my-6">
        <div class="join">
            @if ($paginator->onFirstPage())
                <button class="join-item btn btn-disabled" disabled>
                    ← Previous
                </button>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="join-item btn">
                    ← Previous
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="join-item btn">
                    Next →
                </a>
            @else
                <button class="join-item btn btn-disabled" disabled>
                    Next →
                </button>
            @endif
        </div>
    </nav>
@endif