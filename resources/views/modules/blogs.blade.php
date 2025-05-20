@if (count($module->data()) > 0)
<section class="blog-area-4 space" id="blog-sec">
 <div class="container">
  <div class="row justify-content-lg-between justify-content-center align-items-center">
   <div class="col-lg-6">
    <div class="title-area text-lg-start text-center">
     <span class="sub-title text-theme">{{$module->top}} <i class="ri-arrow-right-down-line"></i></span>
     <h2 class="sec-title">{{$module->title}}</h2>
    </div>
   </div>
   <div class="col-md-auto">
    <div class="sec-btn">
     <div class="icon-box">
      <button data-slick-prev=".blog-slider4" class="slick-arrow default style2"><i class="ri-arrow-left-line"></i></button>
      <button data-slick-next=".blog-slider4" class="slick-arrow default style2"><i class="ri-arrow-right-line"></i></button>
     </div>
    </div>
   </div>
  </div>
  <div class="row global-carousel blog-slider4 slider-shadow" data-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
   @foreach ($module->data() as $item)
   <div class="col-md-6 col-lg-4">
    <div class="blog-card style4">
     <div class="blog-img">
      <img class="lazy" data-src="{{asset($item->image)}}" alt="{{$item->title}}">
      <div class="blog-date">
       <span><span>{{ $item->date()->format('d') }}</span>{{ $item->date()->translatedFormat('M') }}</span>
       <div class="year">{{ $item->date()->format('Y') }}</div>
      </div>
     </div>
     <div class="blog-content">
      <h3 class="blog-title"><a href="{{route('blog',$item->slug)}}">{{$item->title}}</a></h3>
      <p class="blog-text">{!! $item->short_text() !!}</p>
     </div>
    </div>
   </div>
   @endforeach
   
  </div>
 </div>
</section> 
@endif