<div class="home-about" id="{{str()->slug($module->title)}}">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-lg-6 col-md-12">
        <div class="home-about-left">
          <div class="home-about-img">
            <figure class="reveal image-anime">
              <img src="{{asset($module->data()->image1)}}" alt="{{setting('site.title')}}">
            </figure>
          </div>
          
          <div class="home-about-since">
            @php
            $since =  explode(' ',$module->top);
            @endphp
            <div class="h3">{{$since[0]}}</div>
            <div class="h2">{{isset($since[1]) ? $since[1] : ''}}</div>
          </div>
        </div>
      </div>
      <div class="col-lg-10 mt-5 text-center">
        <div class="section-title">
          <div class="h3 wow fadeInUp" data-wow-delay="0.50s">{{setting('site.title')}}</div>
          <h2 class="text-anime">{{$module->title}}</h2>
        </div>
        
        <div class="home-about-content wow fadeInUp" data-wow-delay="0.75s">
          {!! $module->text !!}
        </div>
        {!! $module->data()->about !!}
      </div>
    </div>
  </div>
</div>
@push('links')
<style>
  p strong{
    font-size: 24px;
    color: #3e3e3e;
  }
</style>
@endpush