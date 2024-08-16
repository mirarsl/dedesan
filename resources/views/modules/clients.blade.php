@if (count($module->data()) > 0)
<div class="client-area-1 text-center space bg-title overflow-hidden">
 <div class="container">
  <div class="title-area text-center">
   <span class="sub-title text-white">{{$module->top}}</span>
   <h2 class="sec-title text-white">{{$module->title}}</h2>
  </div>
  <div class="row global-carousel client-slider1" data-slide-show="5" data-lg-slide-show="4" data-md-slide-show="3" data-sm-slide-show="2">
   @foreach ($module->data() as $item)
   <div class="col-lg-auto">
    <div class="client-logo">
     <img src="{{asset($item->image)}}" alt="{{$item->title}}">
    </div>
   </div>
   @endforeach
  </div>
 </div>
</div> 
@endif