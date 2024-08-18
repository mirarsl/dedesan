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