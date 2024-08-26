<section class="blog-area space-top space-extra-bottom">
 <div class="container">
  <div class="row gx-60">
   <div class="col-xxl-8 col-lg-7">
    <div class="blog-single">
     <div class="blog-img">
      <img src="{{asset($Page->image)}}" alt="{{$Page->title}}">
      <div class="blog-date">
       <span><span>{{ $Page->date()->format('d') }}</span>{{ $Page->date()->translatedFormat('M') }}</span>
       <div class="year">{{ $Page->date()->format('Y') }}</div>
      </div>
     </div>
     <div class="blog-content">
      <h2 class="blog-title">{{$Page->title}}</h2>
      {!! $Page->text !!}
     </div>
     <div class="share-links clearfix ">
      <div class="row justify-content-between">
       <div class="col-md-auto">
        <div class="tagcloud">
         @php
         $tags = explode(',',$Page->tags);
         @endphp
         @foreach ($tags as $item)
         <a rel="tag">{{$item}}</a>
         @endforeach
        </div>
       </div>
       <div class="col-md-auto text-xl-end">
        <div class="social-btn style3">
         <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, 'newwindow', 'width=600,height=400'); return false;"><i class="ri-twitter-x-line"></i></a>
         <a href="https://api.whatsapp.com/send?text={{ urlencode(request()->fullUrl()) }}" target="_blank" rel="noopener noreferrer"><i class="ri-whatsapp-line"></i></a>                           
         <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, 'newwindow', 'width=600,height=400'); return false;"><i class="ri-facebook-fill"></i></a>
         <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}" target="_blank" rel="noopener noreferrer" onclick="window.open(this.href, 'newwindow', 'width=600,height=400'); return false;"><i class="ri-linkedin-fill"></i></a>
        </div>
       </div>
      </div>
     </div>
    </div>
    
   </div>
   
   <div class="col-xxl-4 col-lg-5">
    <aside class="sidebar-area">
     
     <div class="widget">
      <h3 class="widget_title">Diğer Haberler</h3>
      <div class="recent-post-wrap">
       @foreach ($Other as $item)
       <div class="recent-post"> 
        <div class="media-img">
         <a href="{{route('news',$item->slug)}}"><img src="{{asset($item->image)}}" alt="{{$item->title}}"></a>
        </div>
        <div class="media-body">
         <h4 class="post-title"><a class="text-inherit" href="{{route('news',$item->slug)}}">{{$item->title}}</a></h4>
        </div>
       </div>
       @endforeach
      </div>
     </div>
     
    </aside>
   </div>
  </div>
 </div>
</section>