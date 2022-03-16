@extends('layout.index')

@section('title'){{ isset($category->title) ? $category->title : $category->name }}@endsection
@section('description'){{$category->description}}@endsection
@section('keywords'){{$category->keywords}}@endsection
@section('robots'){{ $category->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$category->slug}}@endsection

@section('content')
<div class="uk-grid ">
	<div class="uk-width-large-1-6 menu-left uk-visible-large">
		@include('layout.menu_pc')
	</div>
	<div class="uk-width-large-5-6 body">
		@include('layout.header')
		<section class="section5">
			<div class="uk-container-center">
				<div class="panel-body">
					<header class="panel-head homes-tit-1">
						<h2>{{$category->name}}</h2>
					</header>
					<div class="uk-grid ">
						<div class="uk-width-large-1-2 menu-left" style="margin-bottom: 20px">
							{!!$category->content!!}
						</div>
						<div class="uk-width-large-1-2 menu-left">
							<iframe style="width: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3869.686547046635!2d108.21987611483439!3d14.095671890125631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316ea53e88c9fc5f%3A0x9adbdad97b9928f0!2zxJDhu5MgR-G7lyBOZ3V5w6puIEto4buRaSBRdcOibiBQaMawxqFuZw!5e0!3m2!1svi!2s!4v1647231842192!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</div>

@endsection

@section('css')
@endsection

@section('script')

@endsection