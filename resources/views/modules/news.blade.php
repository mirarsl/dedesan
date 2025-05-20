@if (count($module->data()) > 0)
<section class="blog-area-1 space">
 <div class="container">
  <div class="row justify-content-lg-between justify-content-center align-items-center">
   <div class="col-lg-6">
    <div class="title-area text-lg-start text-center">
     <span class="sub-title">{{$module->top}}</span>
     <h2 class="sec-title">{{$module->title}}</h2>
    </div>
   </div>
   <div class="col-md-auto">
    <div class="sec-btn">
     <a href="{{$module->url}}" class="btn style-border">{{$module->button}} <i class="ri-arrow-right-up-line"></i></a>
    </div>
   </div>
  </div>
  <div class="row global-carousel blog-slider slider-shadow" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
   @foreach ($module->data() as $item)
   <div class="col-md-6 col-lg-4">
    <div class="blog-card">
     <a href="{{route('news',$item->slug)}}">
      <div class="blog-img">
       <img class="lazy" data-src="{{asset($item->image)}}" alt="{{$item->title}}">
       <div class="blog-date">
        <span><span>{{ $item->date()->format('d') }}</span>{{ $item->date()->translatedFormat('M') }}</span>
        <div class="year">{{ $item->date()->format('Y') }}</div>
       </div>
      </div>
      <div class="blog-content">
       <h3 class="blog-title"><a href="{{route('news',$item->slug)}}">{{$item->title}}</a></h3>
       <p class="blog-text">{!! $item->short_text() !!}</p>
       <a href="{{route('news',$item->slug)}}" class="btn">Devamını Gör <i class="ri-arrow-right-up-line"></i></a>
      </div>
     </a>
    </div>
   </div>
   @endforeach   
  </div>
 </div>
</section>   
@endif