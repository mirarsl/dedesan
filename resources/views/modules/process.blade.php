<div class="service-area-5 space-bottom overflow-hidden">
 <div class="container">
  <div class="about-wrap3">
   <div class="title-area mb-50">
    <span class="sub-title text-theme">{{$module->top}} <i class="ri-arrow-right-down-line"></i></span>
    <h2 class="sec-title">{{$module->title}}</h2>
    <div class="sec-text">{!! $module->text !!}</div>
   </div>
  </div>
  <div class="service-card-wrap5">
   <div class="row gy-50 justify-content-xl-between justify-content-center">
    @foreach ($module->data() as $item)
    <div class="col-xxl-auto col-xl-4 col-md-6">
     <div class="service-card style5">
      <div class="service-card-number">{{$loop->index + 1}}</div>
      <div class="service-card_content">
       <div class="service-card_icon">
        <img src="{{asset($item->image)}}" alt="{{$item->title}}">
       </div>
       <h3 class="service-card_title">{{$item->title}}</h3>
       <p class="service-card_text">{{$item->text}}</p>
      </div>
     </div>
    </div>
    @endforeach
   </div>
  </div>
 </div>
</div>