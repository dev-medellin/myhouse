<div class="pagination-area">
    <div class="container">	
@if ($paginator->hasPages())
    <nav class="navigation pagination">
        <div class="nav-links">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <a class="prev page-numbers" class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')" href="javascript:vid(0);">
                        <i class="fa fa-angle-left"></i>
                    </a>
                @else
                        <a class="prev page-numbers" class="disabled" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <!-- <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a> -->
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <!-- <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li> -->
                        <a class="page-numbers disabled" aria-disabled="true" href="#">{{ $element }}</a>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                               <span class="page-numbers current">{{ $page }}</span>
                            @else
                            <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                                <!-- <li><a href="{{ $url }}">{{ $page }}</a></li> -->
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                        <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                            <i class="fa fa-angle-right"></i>
                        </a>
                        <!-- <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a> -->
                @else
                    <a class="next page-numbers" class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')" href="javascript:vid(0);">
                        <i class="fa fa-angle-right"></i>
                    </a>
                @endif
        </div>
    </nav>
@endif
    </div>
</div>
