@if ($paginator->hasPages())
<ul class="nav justify-content-center">
    @if ($paginator->onFirstPage())
        <li class="nav-item "><span class="nav-link active"> <i class="fas fa-arrow-left"></i></span></li>
    @else
        <li class="nav-item "><a class="nav-link active" href="{{ $paginator->previousPageUrl() }}" rel="prev"><i class="fas fa-arrow-left"></i> </a></li>
    @endif
    @foreach ($elements as $element)
        @if (is_string($element))
            <li class="nav-item "><span class="nav-link active">{{ $element }}</span></li>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active my-active"><span class="nav-link active">{{ $page }}</span></li>
                @else
                    <li class="nav-item "><a class="nav-link active" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    @if ($paginator->hasMorePages())
        <li class="nav-item "><a class="nav-link active" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="fas fa-arrow-right"></i></a></li>
    @else
        <li class="nav-item "><span class="nav-link active"><i class="fas fa-arrow-right"></i></span></li>
    @endif
</ul>
@endif 