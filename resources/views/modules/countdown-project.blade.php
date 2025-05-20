@if (count($module->data()) > 0)
<div class="cta-area-4" id="contact-sec">
 <div class="cta-wrap4 text-center lazy" data-bg-src="{{asset($module->data()->first()->image)}}" data-overlay="title" data-opacity="6">
  <div class="title-area mb-30">
   <span class="sub-title text-white">{{$module->top}}</span>
   <h2 class="cta-title style2">{{$module->title}}</h2>
   <h3 class="cta-title text-white">{{$module->data()->first()->title}}</h3>
   <div id="timer"></div>
  </div>
  <div class="btn-wrap justify-content-center">
   <a href="{{route('project',$module->data()->first()->slug)}}" class="btn style2">{{$module->button}} <i class="ri-arrow-right-up-line"></i></a>
  </div>
 </div>
</div>
@endif

@if (!(empty($module->data()->first()->end_date)) && $module->data()->first()->end_date > now())
@push('links')
<style>
 #timer {
  font-size: 52px;
  line-height: 40px;
  font-weight: bold;
  color: white;
  margin-top: .75em;
 }
 #timer div {
  margin-right: .3em;
  display: inline-flex;
  align-items: end;
 }
 #timer div span {
  font-size: 0.35em;
  line-height: 1;
  font-weight: 100;
  margin-left: .25em;
 }
 #timer small {
  font-size: 30px;
 }
 @media (max-width:767px){
  #timer small {
   display: block;
   margin: .5em 0;
  }
  #timer div {
   margin-right: .1em;
   margin-bottom: .3em;
  }
 }
 @media (max-width:550px){
  #timer small {
   display: block;
   margin: .5em 0;
  }
  #timer div {
   margin-right: .1em;
   margin-bottom: .3em;
  }
  #timer div.me-2 {
   display: none;
  }
 }
</style>
@endpush
@push('scripts')
<script>
 function updateTimer() {
  future  = Date.parse("{{$module->data()->first()->end_date}}");
  now     = new Date();
  diff    = future - now;
  
  days  = Math.floor( diff / (1000*60*60*24) );
  hours = Math.floor( diff / (1000*60*60) );
  mins  = Math.floor( diff / (1000*60) );
  secs  = Math.floor( diff / 1000 );
  
  d = days;
  h = hours - days  * 24;
  m = mins  - hours * 60;
  s = secs  - mins  * 60;
  
  document.getElementById("timer")
  .innerHTML =
  '<small>Proje Teslimine </small>'+
  '<div> ' + d + '<span> gün</span></div>' +
  '<div> ' + h + '<span> saat</span></div>'+
  '<div> ' + m + '<span> dakika</span></div>'+
  '<div class="me-2"> ' + s + '<span> saniye</span></div>'+
  '<small> Kaldı</small>'
 }
 // updateTimer();
 setInterval('updateTimer()', 1000 );
 
</script>
@endpush
@endif
