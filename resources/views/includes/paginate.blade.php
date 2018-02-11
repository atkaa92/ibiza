@if ($paginator->lastPage() > 1)
    <ul class="pagin">
        <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : '' }} pagin__item">
            <a href="{{ $paginator->url(1) }}">Previous</a>
        </li>
        @for ($i = 1; $i <= $paginator->lastPage(); $i++)
            <li class="{{ ($paginator->currentPage() == $i) ? ' pagin__link pagin__link--active' : '' }} pagin__link">
                <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </li>
        @endfor
        <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
            <a href="{{ $paginator->url($paginator->currentPage()+1) }}" >Next</a>
        </li>
    </ul>
@endif