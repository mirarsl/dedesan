<div class="hero-contact-area position-relative z-index-common">
    <div class="hero-contact-bg-img bg-title">
        <img src="assets/img/bg/whyus-bg.svg" alt="Why Us Background">
    </div>
    <div class="hero-contact-wrap">
        <h2 hidden>{{$module->title}}</h2>
        @foreach ($module->data() as $item)
        @if ($loop->first)
        <div class="hero-award-wrap" data-bg-src="assets/img/award.png">
            <div class="hero-award-icon">
                <img src="{{asset($item->icon)}}" alt="{{$item->title}}">
            </div>
            <div class="hero-award-logo">
                <img src="assets/img/logo-white.svg" alt="{{setting('site.title')}}">
            </div>
            <h3 class="hero-award-title">{{$item->title}}</h3>
        </div>
        @else
        <div class="hero-contact-info-wrap">
            <div class="hero-contact-icon">
                <img src="{{asset($item->icon)}}" alt="{{$item->title}}">
            </div>
            <h3 class="hero-contact-info-title">{{$item->title}}</h3>
            <p class="hero-contact-info-text">{{$item->text}}</p>
        </div>
        @endif
        @endforeach
    </div>           
</div>