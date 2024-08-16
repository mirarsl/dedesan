<div class="post-section">
  <div class="@hasSection ('product-image') container-fluid @else container @endif">
    <div class="row">
      @hasSection ('product-image')
      <div class="col-lg-5">
        <div class="position-sticky" style="top:100px;">
          @yield('product-image')                
        </div>
      </div>
      @else
      @endif
      <div class="@hasSection ('product-image') col-lg-7 @else col-lg-12 @endif">
        <div class="row">
          @foreach ($module->data() as $item)
          <div class="col-lg-4 col-md-6 mb-5 wow fadeInUp" data-wow-delay="0.75s">
            <div class="menu-item">
              <div class="menu-item-img">
                <figure class="image-anime">
                  <a href="{{route('product',$item->slug)}}">
                    <img src="{{asset($item->image)}}" alt="{{$item->title}}">
                  </a>
                </figure>										
              </div>
              
              <div class="menu-item-body">
                <a href="{{route('product',$item->slug)}}">
                  <h3>{{$item->title}}</h3>
                </a>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      
    </div>
    
    <div class="row">
      <div class="col-md-12">
        {{ $module->data()->links('pagination.index') }}
      </div>
    </div>
  </div>
</div>
</div>
</div>
