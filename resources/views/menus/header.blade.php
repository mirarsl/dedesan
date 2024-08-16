@php(empty($stack) ?  $stack = 0 :'')
<ul @if ($stack > 0) class="sub-menu" @endif>
	@foreach ($items as $menu_item)
	<li class="{{ count($menu_item->children) > 0 ? 'menu-item-has-children' : '' }}">
		<a href='{{ $menu_item->link() }}'>{{ $menu_item->title }}</a>
   @if (count($menu_item->children) > 0)
    @include('menus.header', ['items' => $menu_item->children, 'stack' => $stack + 1])
   @endif
	</li>
	@endforeach
</ul> 

{{-- <ul>
	<li class="menu-item-has-children">
		<a href="#">HOME</a>
		<ul class="sub-menu">
			<li class="menu-item-has-children">
				<a href="#">Multipage</a>
				<ul class="sub-menu">
					<li>
						<a href="index.html">Home 01</a>
					</li>
					<li>
						<a href="home-2.html">Home 02</a>
					</li>
					<li>
						<a href="home-3.html">Home 03</a>
					</li>
					<li>
						<a href="home-4.html">Home 04</a>
					</li>
					<li>
						<a href="home-5.html">Home 05</a>
					</li>
				</ul>
			</li>
			<li class="menu-item-has-children">
				<a href="#">Onepage</a>
				<ul class="sub-menu">
					<li>
						<a href="home-1-op.html">Home 01 Onepage</a>
					</li>
					<li>
						<a href="home-2-op.html">Home 02 Onepage</a>
					</li>
					<li>
						<a href="home-3-op.html">Home 03 Onepage</a>
					</li>
					<li>
						<a href="home-4-op.html">Home 04 Onepage</a>
					</li>
					<li>
						<a href="home-5-op.html">Home 05 Onepage</a>
					</li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<a href="about.html">ABOUT</a>
	</li>
	<li class="menu-item-has-children">
		<a href="#">SERVICES</a>
		<ul class="sub-menu">
			<li><a href="service.html">Service</a></li>
			<li><a href="service-details.html">Service Details</a></li>
		</ul>
	</li>
	<li class="menu-item-has-children">
		<a href="#">PAGES</a>
		<ul class="sub-menu">
			<li><a href="project.html">Project Page</a></li>
			<li><a href="project-details.html">Project Details</a></li>
			<li><a href="team.html">Team Page</a></li>
			<li><a href="team-details.html">Team Details</a></li>
			<li><a href="shop.html">Shop Page</a></li>
			<li><a href="shop-details.html">Shop Details</a></li>
			<li><a href="cart.html">Cart</a></li>
			<li><a href="checkout.html">Checkout</a></li>
			<li><a href="wishlist.html">Wishlist</a></li>
		</ul>
	</li>  
	<li class="menu-item-has-children">
		<a href="#">NEWS</a>
		<ul class="sub-menu">
			<li><a href="blog.html">News</a></li>
			<li><a href="blog-details.html">News Details</a></li>
		</ul>
	</li>
	
	<li>
		<a href="contact.html">CONTACT</a>
	</li>
</ul> --}}