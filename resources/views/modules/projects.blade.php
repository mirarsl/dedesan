<div class="portfolio-area-3 space-bottom">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-7">
				<div class="title-area text-lg-start text-center">
					<span class="sub-title text-theme">{{$module->top}} <i class="ri-arrow-right-down-line"></i></span>
					<h2 class="sec-title">{{$module->title}}</h2>
				</div>
			</div>
			<div class="col-lg-auto">
				<div class="sec-btn">
					<a href="{{$module->url}}" class="btn">{{$module->button}} <i class="ri-arrow-right-up-line"></i></a>
				</div>
			</div>
		</div>
		<div class="portfolio-slider3 overflow-hidden">
			<div class="row gy-30 gx-30 global-carousel" data-slide-show="2" data-ml-slide-show="2" data-lg-slide-show="1">
				@foreach ($module->data() as $item)
				<div class="col-lg-6">
					<div class="portfolio-card">
						<div class="portfolio-card-thumb">
							<img src="{{asset($item->image)}}" alt="{{$item->title}}">
						</div>
						<div class="portfolio-card-details">
							<div class="media-left">
								<span class="portfolio-card-subtitle">{{$item->getType()}}</span>
								<h3 class="portfolio-card-title"><a href="{{route('project',$item->slug)}}">{{$item->title}}</a></h3>
								<p class="portofolio-card-text">{{$item->short_text}}</p>
							</div>  
						</div>
						<a href="{{route('project',$item->slug)}}" class="btn">Devamını Gör <i class="ri-arrow-right-up-line"></i></a>                          
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>