<div class="about-area-2 space-top overflow-hidden">
  <div class="container">
    <div class="row gx-60 align-items-start flex-row-reverse">
      <div class="col-xl-6">
        <div class="about-thumb2 mb-60 mb-xl-0"> 
          <div class="about-img-1">
            <img src="{{asset($module->data()->image1)}}" alt="{{$module->title}}">
          </div>
        </div>
      </div>
      <div class="col-xl-6">
        <div class="title-area mb-25">
          <span class="sub-title">{{$module->top}}</span>
          <h2 class="sec-title">{{$module->title}}</h2>
          <p class="sec-text">{!! $module->data()->about !!}</p>
        </div>             
      </div>
    </div>
  </div>
</div>