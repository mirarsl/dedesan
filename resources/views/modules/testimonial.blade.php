@if (!(empty($module->data())))
<div class="testimonials-section">
 <div class="container">
  <div class="row align-items-center">
   <div class="col-lg-6 col-md-7">
    <div class="section-title">
     <div class="h3 wow fadeInUp" data-wow-delay="0.50s">{{$module->top}}</div>
     <h2 class="text-anime">{{$module->title}}</h2>
    </div>
    
    <div class="testimonial-slider-wrapper wow fadeInUp" data-wow-delay="0.75s">
     <div class="swiper testimonial-slider">
      <div class="swiper-wrapper">
       @foreach ($module->data() as $item)
       <div class="swiper-slide">
        <div class="testimonial-slide">
         <div class="testimonial-body">
          <p>{{$item->text}}</p>
         </div>
         
         <div class="testimonial-footer">
          <div class="h3">{{$item->title}}</div>
          <p>{{$item->tag}}</p>
         </div>
        </div>
       </div>
       @endforeach
      </div>
      
      <div class="swiper-pagination">
       <div class="swiper-button swiper-button-next"></div>
       <div class="swiper-button swiper-button-prev"></div>
      </div>
     </div>
    </div>
    
   </div>
   <div class="col-lg-6 col-md-5">
    <div class="testimonial-img">
     <img src="{{asset($module->image)}}" alt="{{$module->top}}">
    </div>
   </div>
  </div>
 </div>
</div>
@endif
