<div data-uk-sticky="{top: 0}" class="menu_pc">
	<div class="logo">
		<a href="{{asset('')}}"><img src="data/themes/{{$logo->img}}"></a>
	</div>
	<div id="menu">
	<ul>
		@foreach($menu_product as $val)
		<li><a href="{{$val->slug}}">{{$val->name}}</a></li>
		@endforeach
		
		<li><a href="#">Tin tức</a>
			<ul class="sub-menu">
			<li><a href="#">WordPress sdfs sdfsdf</a></li>
			<li><a href="#">SEO</a></li>
			<li><a href="#">Hosting</a></li>
			</ul>
		</li>
	</ul>
	</div>
</div>

<style type="text/css">

</style>