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
<section class="section5">
<div class="uk-container-center">
<div class="panel-body">
<div class="uk-grid ">
  <div class="uk-width-large-3-4 menu-left uk-visible-large">
    <section class="artcatalogue">
    <header class="panel-head homes-tit-1">
      <h2>{{$category->name}}</h2>
    </header>
    <section class="panel-body">
    <ul class="uk-list list-article">
      @foreach($articles as $val)
      <li>
      <article class="article uk-clearfix">
      <div class="thumb img-flash">
      <a class="image img-cover" href="{{$val->category->slug}}/{{$val->slug}}" title="{{$val->name}}"><img src="data/news/{{$val->img}}" alt="{{$val->name}}"></a>
      </div>
      <div class="info">
      <h2 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}" title="">{{$val->name}}</a></h2>
      <div class="meta">
        <i class="fa fa-user"></i> {{$val->user->name}}
        <i class="fa fa-clock-o"></i> {{date('d/m/Y',strtotime($val->updated_at))}}
        <i class="fa fa-folder-open"></i> {{$val->category->name}}
        <i class="fa fa-eye"></i> {{$val->hist}} view
      </div>
      <div class="description lib-line-4">Berriver Jardin là dự án bất động sản hot nhất khu vực phía đông Hà Nội vào năm 2020. Bởi sở hữu vị trí đắc địa tại đường Nguyễn Văn Cừ và nằm liền kề với phố cổ ...</div>
      </div>
      </article><!-- .article-1 -->
      </li>
      @endforeach
    </ul><!-- .list-article -->
    </section>
    </section>
  </div>
  <div class="uk-width-large-1-4 menu-left uk-visible-large">
    ád
  </div>
</div>

</div>
</div>
</section>
</div>
</div>
@endsection