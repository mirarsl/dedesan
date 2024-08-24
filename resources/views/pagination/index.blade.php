<div class="pagination justify-content-center">
 <ul>
  @if (!$paginator->onFirstPage())
  <li><a href="{{ $paginator->currentPage() == 2 ? str_replace('?page=1','',$paginator->previousPageUrl()) : $paginator->previousPageUrl() }}"><i class="ri-arrow-left-line"></i></a></li>
  @endif
  @foreach ($elements as $element)
  @if (is_string($element))
  @endif
  @if (is_array($element))
  @foreach ($element as $page => $url)
  @if ($page == $paginator->currentPage())
  <li><a class="active">{{ $page }}</a></li>
  @else
  <li><a href="{{ $page == 1 ? str_replace('?page=1','',$url) : $url }}">{{ $page }}</a></li>
  @endif
  @endforeach
  @endif
  @endforeach
  @if ($paginator->hasMorePages())
  <li><a href="{{ $paginator->nextPageUrl() }}"><i class="ri-arrow-right-line"></i></a></li>
  @endif
 </ul>
</div>