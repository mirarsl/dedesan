<div class="about-area-1 overflow-hidden space">
		<div class="container">
			<div class="row gx-60">
				<div class="col-xl-6">
					<div class="about-thumb1 mb-40 mb-lg-0 p-0"> 
						<div class="about-img-1">
							<img src="{{asset($module->image)}}" alt="{{$module->title}}">
						</div>
					</div>
				</div>
				<div class="col-xl-6 space">
					<div class="about-content-wrap1">
						<div class="title-area mb-25">
							<span class="sub-title">{{$module->top}}</span>
							<h2 class="sec-title">{{$module->title}}</h2>
							<div class="sec-text">{!! $module->text !!}</div>
						</div>
						<div class="btn-group mt-20">
							<a href="{{$module->url}}" class="btn style3">{{$module->button}} <i class="ri-arrow-right-up-line"></i></a>
						</div>
					</div>                    
				</div>
			</div>
		</div>
</div>