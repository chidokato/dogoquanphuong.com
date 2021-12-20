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
<div class="uk-grid ">
<div class="uk-width-large-3-4 menu-left uk-visible-large">
	<header class="panel-head homes-tit-1">
	<h2>{{$category->name}}</h2>
	</header>
	<div class="content">
      {!!$category->content!!}
    </div>
  </section>
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