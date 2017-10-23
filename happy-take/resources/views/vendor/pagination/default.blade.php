
@if ($paginator->hasPages())
    <nav class="g-mb-50" aria-label="Page Navigation">
        <ul class="list-inline">
            @if ($paginator->onFirstPage())
                <li class="list-inline-item">
                    <span class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" aria-label="Previous">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-left"></i>
                        </span>
                        <span class="sr-only">前一頁</span>
                    </span>
                </li>
            @else
                <li class="list-inline-item">
                    <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-left"></i>
                        </span>
                        <span class="sr-only">前一頁</span>
                    </a>
                </li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <li class="list-inline-item g-hidden-sm-down">
                        <span class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="#">{{ $element }}</span>
                    </li>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="list-inline-item g-hidden-sm-down">
                                <span class="u-pagination-v1__item u-pagination-v1-5 u-pagination-v1-5--active rounded g-pa-4-11" href="#">{{ $page }}</span>
                            </li>
                        @else
                            <li class="list-inline-item g-hidden-sm-down">
                                <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-11" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="list-inline-item">
                    <a class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        <span class="sr-only">下一頁</span>
                    </a>
                </li>
            @else
                <li class="list-inline-item">
                    <span class="u-pagination-v1__item u-pagination-v1-5 rounded g-pa-4-13" aria-label="Next">
                        <span aria-hidden="true">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        <span class="sr-only">下一頁</span>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
