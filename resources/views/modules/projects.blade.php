<div class="portfolio-area-5 overflow-hidden space">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="title-area text-center">
					<span class="sub-title text-theme">{{$module->top}} <i class="ri-arrow-right-down-line"></i></span>
					<h2 class="sec-title">{{$module->title}}</h2>
				</div>
			</div>
		</div>
		<div class="overflow-hidden">
			<div class="row gy-30 gx-30">
				@foreach ($module->data() as $item)
				@if ($loop->index == 0)
				<div class="col-lg-8">
					<div class="portfolio-card style5">
						<div class="portfolio-card-thumb">
							<img src="{{asset($item->image)}}" alt="{{$item->title}}">
						</div>
						<div class="portfolio-card-details">
							<div class="media-left">
								<span class="portfolio-card-subtitle">{{$item->getType()}}</span>
								<h3 class="portfolio-card-title"><a href="{{route('project',$item->slug)}}">{{$item->title}}</a></h3>                     
								<p class="text-white">{{$item->short_text}}</p>
							</div>
							<div class="btn-group">
								<a href="{{route('project',$item->slug)}}" class="btn style2">
									Devamını Gör <i class="ri-arrow-right-line"></i>
								</a> 
							</div>
						</div>
					</div>
				</div>
				@else
				<div class="col-lg-4 col-md-6">
					<div class="portfolio-card style5">
						<div class="portfolio-card-thumb">
							<img src="{{asset($item->image)}}" alt="{{$item->title}}">
						</div>
						<div class="portfolio-card-details">
							<div class="media-left">
								<span class="portfolio-card-subtitle">{{$item->getType()}}</span>
								<h3 class="portfolio-card-title"><a href="{{route('project',$item->slug)}}">{{$item->title}}</a></h3>                     
								<p class="text-white">{{$item->short_text}}</p>
							</div>
							<div class="btn-group">
								<a href="{{route('project',$item->slug)}}" class="btn style2">
									Devamını Gör <i class="ri-arrow-right-line"></i>
								</a> 
							</div>
						</div>
					</div>
				</div>
				@endif
				@endforeach
			</div>
		</div>
	</div>
</div>