@if ($paginator->hasPages())
    <ul class="defaultPagination text-center wow fadeInUp" data-wow-duration="700ms"
        data-wow-delay="300ms">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li>
                <a class="disabled prePost">
                    <i class="ion-ios-arrow-back"></i>
                </a>
            </li>
        @else
            <li>
                <a class="prePost"
                   href="{{ $paginator->previousPageUrl() }}"
                   rel="prev">
                    <i class="ion-ios-arrow-back"></i>
                </a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a>{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li>
                <a class="nextPost"
                   href="{{ $paginator->nextPageUrl() }}"
                   rel="next">
                    <i class="ion-ios-arrow-forward"></i>
                </a>
            </li>
        @else
            <li>
                <a class="disabled nextPost">
                    <i class="ion-ios-arrow-forward"></i>
                </a>
            </li>
        @endif
    </ul>
@endif
