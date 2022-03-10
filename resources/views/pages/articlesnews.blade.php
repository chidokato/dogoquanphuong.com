@extends('layout.index')

@section('title'){{ isset($articles->title) ? $articles->title : $articles->name }}@endsection
@section('description'){{$articles->description}}@endsection
@section('keywords'){{$articles->keywords}}@endsection
@section('robots'){{ $articles->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$articles->category->slug.'/'.$articles->slug.'.html'}}@endsection

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
          <section class="prd-detail">
            <section class="panel-body">
              
            </section><!-- .panel-body -->
          </section><!-- .prd-detail -->
          <section>
            
            <div class="content">
              <header class="panel-head homes-tit-1">
                <h1>{{$articles->name}}</h1>
              </header>
              <p><i>{!!$articles->detail!!}</i></p>
              {!!$articles->content!!}
            </div>
          </section>
        </div>
        <div class="uk-width-large-1-4 menu-left uk-visible-large">
          @include('layout.sidebar_pro')
        </div>
      </div>

      </div>
      </div>
  </div>
</div>
@endsection

@section('css')
@endsection

@section('script')
@endsection