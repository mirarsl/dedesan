<section class="project-page space-top space-extra-bottom">
 <div class="container">
  <div class="row gy-40 justify-content-center">
   <div class="col-lg-12 text-center">
    <h2>{{$module->title}}</h2>
   </div>
   @forelse ($module->data() as $item)
   <div class="col-md-6 col-lg-4">
    <div class="portfolio-card style2 style-certificate">
     <div class="portfolio-card-thumb">
      <img src="{{asset($item->file)}}" alt="{{$item->title}}">
      <a class="icon-btn popup-image" href="{{asset($item->file)}}"><i class="ri-eye-line"></i></a>
     </div>
     <div class="portfolio-card-details">
      <h3 class="portfolio-card-title">{{$item->title}}</h3>             
     </div>
    </div>
   </div>
   @empty
   <div class="col-md-6 col-lg-4">
    <h2>{{$module->title}}</h2>
    <strong>Eklenmiş sertifika bulunamamıştır.</strong>
   </div>
   @endforelse
  </div>
 </div>
</section> 