<section class="contact-page-area space">
 <div class="container">
  <div class="row gy-4 justify-content-center">
   <div class="col-md-12">
    <div class="contact-page-card bg-smoke">
     <div class="contact-page-card-details">
      <h2 class="contact-page-card_title">{{$module->data()->contact1}}</h2>
      <div class="contact-page-card-text">
       <h3><i class="ri-phone-line"></i> Telefon</h3>
       <a class="contact-page-card_link" href="tel:{{$module->data()->phone1}}">{{$module->data()->phone1}}</a>
       @if (isset($module->data()->phone2))
       <br>
       <a class="contact-page-card_link" href="tel:{{$module->data()->phone2}}">{{$module->data()->phone2}}</a>
       @endif
      </div>
      <div class="contact-page-card-text">
       <h3><i class="ri-mail-line"></i> E-Posta</h3>
       <a class="contact-page-card_link" href="mailto:{{$module->data()->email1}}">{{$module->data()->email1}}</a>
       @if (isset($module->data()->email2))
       <br>
       <a class="contact-page-card_link" href="mailto:{{$module->data()->email2}}">{{$module->data()->email2}}</a>
       @endif
      </div>   
      <div class="contact-page-card-text">
       <h3><i class="ri-map-2-line"></i> Adres</h3>
       {{$module->data()->address1}}
      </div>
     </div>
     <div class="contact-page-card-thumb">
      <img src="assets/img/normal/contact_page1-1.png" alt="{{$module->data()->contact1}}">
     </div>  
    </div>
   </div>
   @if (isset($module->data()->contact2))
   {{-- <div class="col-md-6">
    <div class="contact-page-card bg-smoke">
     <div class="contact-page-card-details">
      <h2 class="contact-page-card_title">{{$module->data()->contact2}}</h2>
      <div class="contact-page-card-text">
       <h3><i class="ri-phone-line"></i> Telefon</h3>
       <a class="contact-page-card_link" href="tel:{{$module->data()->phone2}}">{{$module->data()->phone2}}</a>
      </div>
      <div class="contact-page-card-text">
       <h3><i class="ri-mail-line"></i> E-Posta</h3>
       <a class="contact-page-card_link" href="mailto:{{$module->data()->email2}}">{{$module->data()->email2}}</a>
      </div>   
      <div class="contact-page-card-text">
       <h3><i class="ri-map-2-line"></i> Adres</h3>
       {{$module->data()->address2}}
      </div>
     </div>
     <div class="contact-page-card-thumb">
      <img src="assets/img/normal/contact_page1-2.png" alt="{{$module->data()->contact2}}">
     </div>  
    </div>
   </div> --}}
   @endif
   
   
   
  </div>
 </div>
</section>  