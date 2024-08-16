<div class="post-pagination wow fadeInUp" data-wow-delay="1.50s">
 <ul class="pagination">
  @if (!$paginator->onFirstPage())
  <li><a href="{{ $paginator->currentPage() == 2 ? str_replace('?page=1','',$paginator->previousPageUrl()) : $paginator->previousPageUrl() }}"><i class="fa-solid fa-arrow-left-long"></i></a></li>
  @endif
  @foreach ($elements as $element)
  @if (is_string($element))
  @endif
  @if (is_array($element))
  @foreach ($element as $page => $url)
  @if ($page == $paginator->currentPage())
  <li><span class="current">{{ $page }}</span></li>
  @else
  <li><a href="{{ $page == 1 ? str_replace('?page=1','',$url) : $url }}">{{ $page }}</a></li>
  @endif
  @endforeach
  @endif
  @endforeach
  @if ($paginator->hasMorePages())
  <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fa-solid fa-arrow-right-long"></i></a></li>
  @endif
 </ul>
</div>