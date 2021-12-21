@extends('layout.index')

@section('title'){{ isset($category->title) ? $category->title : $category->name }}@endsection
@section('description'){{$category->description}}@endsection
@section('keywords'){{$category->keywords}}@endsection
@section('robots'){{ $category->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$category['slug']}}@endsection

@section('content')
<div class="uk-grid ">
<div class="uk-width-large-1-6 menu-left uk-visible-large">
@include('layout.menu_pc')
</div>
<div class="uk-width-large-5-6 body">
@include('layout.header')
<div class="banner">
    <img src="data/category/{{$category->img}}">
</div>
<section class="section5">

<div class="uk-container-center">

<div class="panel-body">
    
<div class="uk-grid ">
  <div class="uk-width-large-3-4 menu-left ">
    <header class="panel-head homes-tit-1">
      <h2>{{$category->name}}</h2>
    </header>
    <div class="content">
        {!! $category->content !!}
    </div>
    <ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 list-product" data-uk-grid-match="{target:'.title'}">
    <!-- iteam -->
    @foreach($product as $val)
    <li>
    <div class="product product1 box-shadow">
    <div class="thumb">
    <a class="image img-cover img-shine" href="{{$val->category->slug}}/{{$val->slug}}"><img src="data/product/{{$val->img}}" alt="{{$val->name}}"></a>
    </div>
    <div class="infor">
    <h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}">{{$val->name}}</a></h3>
    <div class="contact-info">
    <button onclick="myFunction()">Tư vấn</button>
    <div class="price">Giá: liên hệ</div>
    </div>
    <!-- <div class="address">Phường Xuân Tảo, Quận Bắc Từ Liêm, Hà Nội</div>
    <div class="peice">Đang cập nhật</div> -->
    </div>
    </div>
    </li>
    @endforeach
    <!-- iteam -->
    </ul>
    {{ $product->links() }}
  </div>
  <div class="uk-width-large-1-4 menu-left uk-visible-large">
    @include('layout.sidebar_pro')
  </div>
</div>

</div>
</div>
</section>
</div>
</div>
<style type="text/css">
    
</style>
@endsection