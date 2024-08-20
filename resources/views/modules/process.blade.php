<div class="why-area-4 space overflow-hidden" data-bg-src="assets/img/bg/why-bg4-1.png">
  <div class="container">
      <div class="row">
          <div class="col-xxl-5 col-lg-6">
              <div class="title-area">
                  <span class="sub-title text-white">{{$module->top}} <i class="ri-arrow-right-down-line"></i></span>
                  <h2 class="sec-title text-white">{{$module->title}}</h2>
              </div>
          </div>
          <div class="col-xxl-4 offset-xxl-2 col-lg-6">
              <div class="wcu-card-wrap4 m-0">
                @foreach ($module->data() as $item)
                  <div class="wcu-card">
                      <div class="wcu-card-icon">
                          <img src="{{asset($item->image)}}" alt="{{$item->title}}">
                      </div>
                      <div class="wcu-card-details">
                          <h3 class="wcu-card-title text-white">{{$item->title}}</h3>
                          <p class="wcu-card-text">{{$item->text}}</p>
                      </div>
                  </div>
                @endforeach
              </div>
          </div>
      </div>
  </div>
</div>
<div class="video-area-2 position-relative">
  <div class="video_thumb2-1" data-bg-src="{{asset($module->image)}}">
  </div>
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <div class="video-wrap2">
                  <a href="{{$module->url}}" class="popup-video play-btn-wrap style2 justify-content-end text-end">
                      <div class="video-text">
                          {{$module->button}}
                      </div>
                      <span class="play-btn style8">
                          <i class="ri-play-fill"></i>
                      </span>
                  </a>
              </div>
          </div>
      </div>
  </div>
</div>
{{-- <section class="process-area-1 space-top  process-bg-half bg-title">
 <div class="hero-contact-bg-img bg-title">
  <img src="assets/img/bg/whyus-bg.svg" alt="Why Us Background">
</div>
 <div class="process_shape_1-2 moving shape-mockup d-lg-block d-none"></div>
 <div class="container">
  <div class="row justify-content-between align-items-center">
   <div class="col-lg-4 col-md-6">
    <div class="title-area text-md-start text-center">
     <span class="sub-title text-white">{{$module->top}}</span>
     <h2 class="sec-title text-white">{{$module->title}}</h2>
    </div>
   </div>
   <div class="col-md-auto">
    <div class="sec-btn text-center">
     <a target="_blank" href="{{$module->url}}" class="popup-video play-btn-wrap">
      {{$module->button}}
      <span class="play-btn style2">
       <i class="ri-play-fill"></i>
      </span>
     </a>
    </div>
   </div>
  </div>
  <div class="process-card-wrap">
   <div class="row gy-30 gx-30">
    @foreach ($module->data() as $item)
    <div class="col">
     <div class="process-card">
      <div class="process-card-number">
       <span>
        0{{$loop->index+1}}
       </span>
      </div>
      <h3 class="process-card-title">{{$item->title}}</h3>
      <p class="process-card-text">{{$item->text}}</p>
     </div>
    </div>
    @endforeach
   </div>
  </div>
 </div>
</section> --}}