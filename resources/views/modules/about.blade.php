<div class="about-area-3 space overflow-hidden">
	<div class="container">
		<div class="row gy-80 gx-100 align-items-end">                
			<div class="col-xl-7">
				<div class="about-wrap3">
					<div class="title-area mb-25">
						<span class="sub-title text-theme">{{$module->top}} <i class="ri-arrow-right-down-line"></i></span>
						<h2 class="sec-title">{{$module->title}}</h2>
						<div class="sec-text">{!! $module->text !!}</div>
					</div>
				</div>
				<div class="about-thumb3 mt-70"> 
					<div class="video-wrap about-img-1">
						<img src="{{$module->image}}" alt="{{$module->top}}">
					</div>
				</div>                                  
			</div>
			<div class="col-xl-5 col-md-8">
				<div class="about-thumb3 mb-30"> 
					<div class="about-img-2">
						<img src="{{$module->image2}}" alt="{{$module->top}}">
					</div>
				</div>
				<div class="btn-group mt-35">
					<a href="{{$module->url}}" class="btn">{{$module->button}} <i class="ri-arrow-right-up-line"></i></a>
				</div>
			</div>
		</div>
	</div>
</div> 