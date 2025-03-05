<div class="portfolio-area-1 space-bottom">
	<div class="title-area text-center">
		<span class="sub-title">{{$module->top}}</span>
		<h2 class="sec-title">{{$module->title}}</h2>
	</div>
	<div class="portfolio-slider1 overflow-hidden">
		<div class="row gy-30 gx-30 global-carousel" data-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true" data-md-dots="true" data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true" data-center-padding="265px" data-xl-center-padding="265px" data-ml-center-padding="200px">
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