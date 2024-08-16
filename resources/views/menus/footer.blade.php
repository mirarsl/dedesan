 @foreach($items as $menu_item)
 <div class="col-md-6 col-xl-auto">
  <div class="widget widget_nav_menu footer-widget">
   <h3 class="widget_title">{{$menu_item->title}}</h3>
   <div class="menu-all-pages-container grid-style">
    <ul class="menu">
     @foreach ($menu_item->children as $item)
     <li>
      <a href='{{ $item->link() }}'>{{$item->title}}</a>
     </li>
     @endforeach
    </ul>
   </div>
  </div>
 </div>
 @endforeach