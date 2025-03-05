<section class="project-page space-top space-extra-bottom">
  <div class="container">
    <div class="row gy-40 justify-content-center">
      
      @foreach ($module->data() as $item)
      <div class="col-md-6 col-lg-4">
        <div class="portfolio-card style2">
          <a href="{{route($Page->route_name,$item->slug)}}">
            <div class="portfolio-card-thumb">
              <img src="{{asset($item->image)}}" alt="{{$item->title}}">
              <span class="portfolio-card-number">{{($loop->index + 1) < 10 ? '0'.($loop->index + 1) : ($loop->index + 1)}}</span>
            </div>
          </a>
          <div class="portfolio-card-details">
            <span class="portfolio-card-subtitle">{{$item->getType()}}</span>
            <h2 class="portfolio-card-title"><a href="{{route($Page->route_name,$item->slug)}}">{{$item->title}}</a></h2>
            <a href="{{route($Page->route_name,$item->slug)}}" class="btn-with-icon">
              Devamını Gör
              <span class="btn-icon">
                <i class="ri-arrow-right-up-line"></i>
              </span>                                        
            </a>                      
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
    {{ $module->data()->links('pagination.index') }}
  </div>
</section>