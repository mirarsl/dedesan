
<div class="contact-section">
 <div class="container">
  <div class="row">
   <div class="col-md-12">
    <div class="section-title">
     <h3 class="wow fadeInUp" data-wow-delay="0.50s">{{$module->top}}</h3>
     <h2 class="text-anime">{{$module->title}}</h2>
    </div>
   </div>
  </div>

  <div class="row align-items-center">
   <div class="col-lg-8 col-md-12 order-lg-1 order-2">
    <div class="google-map wow fadeInUp" data-wow-delay="0.75s">
     <iframe src="{{$module->data()->iframe_url}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
   </div>

   <div class="col-lg-4 col-md-12 order-lg-2 order-1">
    <div class="contact-detail wow fadeInRight" data-wow-delay="1.0s">
     <h3>{{$module->data()->contact1}}</h3>
     <ul class="contact-list-icon">
      <li class="list-item">
       <span class="list-icon-img"> <img src="images/icon-map.svg" alt="Address"> </span>
       <span class="list-icon-text">{{$module->data()->address1}}</span>
      </li>
      <li class="list-item">
       <span class="list-icon-img"> <img src="images/icon-email.svg" alt=""> </span>
       <span class="list-icon-text"><a href="mailto:{{$module->data()->email1}}">{{$module->data()->email1}}</a></span>
      </li>
      <li class="list-item">
       <span class="list-icon-img"> <img src="images/icon-phone.svg" alt=""> </span>
       <span class="list-icon-text"><a href="tel:{{$module->data()->phone1}}">{{$module->data()->phone1}}</a></span>
      </li>
     </ul>
    </div>
   </div>
  </div>
 </div>
</div>