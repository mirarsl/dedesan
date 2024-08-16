<div class="about-gallery" id="{{str()->slug($module->title)}}">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <div class="section-title">
     <div class="h3 wow fadeInUp" data-wow-delay="0.50s">{{$module->top}}</div>
     <h2 class="text-anime">{{$module->title}}</h2>
    </div>
   </div>
  </div>
  
  <div class="row">
   <div class="col-md-6 col-12">
    <div class="wcu-img-box wow fadeInUp" data-wow-delay="0.50s">
     <div class="image-box">
      <figure>
       <h3>Mission</h3>
      </figure>	
     </div>
     <div class="image-body">
      {!! $module->data()->mission !!}
     </div>
    </div>
   </div>
   <div class="col-md-6 col-12">
    <div class="wcu-img-box wow fadeInUp" data-wow-delay="0.75s">
     <div class="image-box">
      <figure>
       <h3>Vision</h3>
      </figure>	
     </div>
     <div class="image-body">
      {!! $module->data()->vision !!}
     </div>
    </div>
   </div>
   <div class="col-md-12 col-12">
    <div class="wcu-img-box wow fadeInUp" data-wow-delay="1.0s">
     <div class="image-box">
      <figure>
       <h3>Quality</h3>
      </figure>	
     </div>
     <div class="image-body">
      {!! $module->data()->quality !!}
     </div>
    </div>
   </div>
   <!-- Why Choose Us Image Box end -->
  </div>
 </div>
</div>