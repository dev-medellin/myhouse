@if ($paginator->hasPages())
<div class="pagination-area">
    <div class="container">	
        <nav class="navigation pagination">
            <div class="nav-links">
            @if ($paginator->onFirstPage())
                <a class="prev page-numbers" class="disabled" href="#">
                    <i class="fa fa-angle-left"></i>
                </a>
            @else
                <a class="prev page-numbers" class="disabled" href="#">
                    <i class="fa fa-angle-left"></i>
                </a>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <a class="page-numbers" href="#">1</a>
                    <span class="page-numbers current">2</span>
                    <a class="page-numbers" href="#">3</a>
                    <a class="page-numbers" href="#">4</a>
                @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                    <span class="page-numbers current">{{$page}}</span>
                    @else
                        <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
            @endforeach
                <a class="next page-numbers" href="#">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
        </nav>
    </div> <!-- /.container -->
</div> <!-- /.pagination-area -->
@endif 