<section class="blog-area space-top space-extra-bottom">
 <div class="container">
  <div class="row gy-40 justify-content-center">
   @foreach ($module->data() as $item)
   <div class="col-md-6 col-lg-4">
    <div class="blog-card">
     <div class="blog-img">
      <a href="{{route($Page->route_name,$item->slug)}}"><img src="{{asset($item->image)}}" alt="{{$item->title}}"></a>
      <div class="blog-date">
       <span><span>{{ $item->date()->format('d') }}</span>{{ $item->date()->translatedFormat('M') }}</span>
       <div class="year">{{ $item->date()->format('Y') }}</div>
      </div>
     </div>
     <div class="blog-content">
      <h2 class="blog-title"><a href="{{route($Page->route_name,$item->slug)}}">{{$item->title}}</a></h2>
      <div class="blog-text">{{ method_exists($item, 'short_text') ? $item->short_text() : '' }}</div>
      <a href="{{route($Page->route_name,$item->slug)}}" class="btn">Devamını Gör <i class="ri-arrow-right-up-line"></i></a>
     </div>
    </div>
   </div>
   @endforeach
  </div>
  {{ $module->data()->links('pagination.index') }}
 </div>
</section>