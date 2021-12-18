<?php use App\menu; ?>
<div data-uk-sticky="{top: 0}" class="menu_pc">
	<div class="logo">
		<a href="{{asset('')}}"><img src="data/themes/{{$logo->img}}"></a>
	</div>
	<div id="menu">
	<ul>
		@foreach($menu_product as $val)
		<?php $sub_menu1 = menu::where('status','true')->where('parent', $val->id)->orderBy('view','asc')->get(); ?>
		<li><a href="{{$val->slug}}">{{$val->name}}</a>
			@if(count($sub_menu1) > 0)
			<ul class="sub-menu">
			@foreach($sub_menu1 as $sub)
	          <li><a href="{{$sub->slug}}">{{$sub->name}}</a></li>
	          @endforeach
			</ul>
			@endif
		</li>
		@endforeach
	</ul>
	</div>
</div>
