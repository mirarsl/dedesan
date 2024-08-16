<div class="blog-detail-page">
 <div class="container">
  <div class="row">
   <div class="col-lg-8 col-md-12">
    <div class="post-content product wow fadeInUp" data-wow-delay="0.50s">
     <div class="post-feature-img text-center">
      <img src="{{asset($Page->image)}}" alt="{{$Page->title}}">
     </div>
     <div class="post-body">
      {!! $Page->text !!}
     </div>
     
    </div>
   </div>
   
   <div class="col-lg-4 col-md-12">
    <div class="category-section wow fadeInUp" data-wow-delay="0.75s">
     <h3>Others</h3>
     <ul>
      @foreach ($Other as $item)
      <li><a href="#"><img src="{{asset($item->image)}}" alt="">{{$item->title}}</a></li>
      @endforeach
     </ul>
    </div>
    
    {{-- <div class="recent-post-section wow fadeInUp" data-wow-delay="1.0s">
     <h3>Recent Post</h3>
     <div class="recent-post">
      <div class="post-item">
       <div class="post-img">
        <a href="blog-details.html"><img src="images/post-2.jpg" alt=""></a>
       </div>
       <div class="post-body">
        <div class="post-meta">
         <ul>
          <li>
           <a href="#"><i class="fa-regular fa-calendar-days"></i>March 17, 2024</a>
          </li>
         </ul>
        </div>
        <h3><a href="blog-single.html">A Spotlight on Our Culinary Innovations</a></h3>
       </div>
      </div>
      
      <div class="post-item">
       <div class="post-img">
        <a href="blog-details.html"><img src="images/post-3.jpg" alt=""></a>
       </div>
       <div class="post-body">
        <div class="post-meta">
         <ul>
          <li>
           <a href="#"><i class="fa-regular fa-calendar-days"></i>March 17, 2024</a>
          </li>
         </ul>
        </div>
        <h3><a href="blog-single.html">Fun Facts About Our Menu Creations</a></h3>
       </div>
      </div>
      
      <div class="post-item">
       <div class="post-img">
        <a href="blog-details.html"><img src="images/post-4.jpg" alt=""></a>
       </div>
       <div class="post-body">
        <div class="post-meta">
         <ul>
          <li>
           <a href="#"><i class="fa-regular fa-calendar-days"></i>March 17, 2024</a>
          </li>
         </ul>
        </div>
        <h3><a href="blog-single.html">Discover the Finest Restaurants in Town!</a></h3>
       </div>
      </div>
     </div>
     
    </div>--}}
    @if (!(empty($Page->meta_tags)))
    <div class="tags-section wow fadeInUp" data-wow-delay="1.0s">
     <h3>Tags</h3>
     <ul>
      @php
          $tags = explode(',',$Page->meta_tags);
      @endphp
      @foreach ($tags as $tag)
      <li><a rel="tag" href="javascript:void(0);">{{$tag}}</a></li>
      @endforeach
     </ul>
    </div> 
    @endif
   </div>
  </div>
 </div>
</div>