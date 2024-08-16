<div class="hero-wrapper hero-4" id="hero">
	<div class="hero-slider4 global-carousel" data-slide-show="1" data-fade="true">
		@foreach ($module->data() as $item)
		<div class="hero-slide" data-overlay="title" data-opacity="4">
			<img src="{{asset($item->image)}}" alt="">
			<div class="container">
				<div class="hero-style4">
					<div class="hero-shadow-text">{{$item->top}}</div>
					<div class="jump-reverse hero-shadow-text-wrap">
						<div class="hero-shadow-text2">Detaylı Bilgi <img src="assets/img/icon/long-arrow-right2.svg" alt="img"> Aşağı Sürükle</div>
					</div>
					<div class="row align-items-center">
						<div class="col-xxl-7 col-xl-8">
							<div class="hero-subtitle" data-ani="slider-custom-anim-left" data-ani-delay="0.1s">{{setting('site.title')}} <img src="assets/img/icon/long-arrow-right2.svg" alt="img"></div>
							<h2 class="hero-title" data-ani="slider-custom-anim-left" data-ani-delay="0.1s">{{$item->title}}</h2>
							<p class="hero-text" data-ani="slider-custom-anim-left" data-ani-delay="0.2s">{{$item->text}}</p>
						</div>
						@if (!(empty($item->button1_title)) && !(empty($item->button1_link)))
						<div class="col-xxl-5 col-xl-4 text-xl-center">
							<div class="hero-tag" data-ani="slideinup" data-ani-delay="0.4s">
								<div class="about-experience-tag style2">
									<span class="hero-title-anime">{{$item->button1_title}}</span>
								</div>
								<a href="{{$item->button1_link}}" class="hero-tag_icon">
									<i class="ri-arrow-right-up-line"></i>
								</a>
							</div>                                
						</div>
						@endif
					</div>
				</div>                
			</div>
		</div>
		@endforeach
	</div>
	<div class="container">
		<div class="hero-4-number-tab" data-asnavfor=".hero-slider4">
			@foreach ($module->data() as $item)
			<button class="tab-btn {{$loop->index == 0 ? 'active':''}}" type="button">{{$loop->index < 10 ? '0'.($loop->index+1) : ($loop->index+1) }}</button>
			@endforeach
		</div>
	</div>
</div>