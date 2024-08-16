 @foreach ($data as $service)
				<li {!! in_array($service->id,$list) ? 'class="open"':'' !!}>
								<div class="menu-title">
												<a href="{{ route('service', ['slug' => $slug . $service->slug . '/']) }}">{{ $service->title }}</a>
												@if (count($service->data) > 0)
												<i class="fas fa-chevron-right"></i>
												@endif
								</div>
								@if (count($service->data) > 0)
												<ul class="sub">
																@livewire('category', ['data' => $service->data, 'slug' => $slug . $service->slug . '/','list' => $list])
												</ul>
								@endif
				</li>
@endforeach
