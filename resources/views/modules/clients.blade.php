@if (count($module->data()) > 0)
<div class="client-area-1 py-5 bg-light overflow-hidden">
 <div class="container">
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