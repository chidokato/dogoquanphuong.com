@extends('layout.index')

@section('title'){{ isset($head_setting->title) ? $head_setting->title : $head_setting->name }}@endsection
@section('description'){{$head_setting->description}}@endsection
@section('keywords'){{$head_setting->keywords}}@endsection
@section('robots'){{ $head_setting->robot == 0 ? 'index, follow' : 'noindex, nofollow' }}@endsection
@section('url'){{asset('').$head_setting['slug']}}@endsection
@section('content')
<div class="uk-grid ">
  <div class="uk-width-large-1-6 menu-left uk-visible-large">
    @include('layout.menu_pc')
  </div>
  <div class="uk-width-large-5-6 body">
    
    @include('layout.slider')

    <section class="commitment-section">
      <div class="uk-container uk-container-center">
        <div class="uk-grid uk-grid-medium uk-grid-width-medium-1-3 container">
           
          <div class="item">
            <div class="box order-1">
              <span class="icon">
                <img src="data/icon-01.png" alt="">
              </span>
              <div class="title"><span>Dịch vụ uy tín chuyên nghiệp</span></div>
            </div>
          </div>
           
          <div class="item">
            <div class="box order-2">
              <span class="icon">
                <img src="data/icon-02.png" alt="">
              </span>
              <div class="title"><span>Sản phẩm đa dạng, sang trọng, đẳng cấp</span></div>
            </div>
          </div>
           
          <div class="item">
            <div class="box order-3">
              <span class="icon">
                <img src="data/icon-03.png" alt="">
              </span>
              <div class="title"><span>Thiết kế sáng tạo, dẫn đầu xu hướng</span></div>
            </div>
          </div>
              </div>
      </div>
    </section>


    <section class="section5">
      <div class="uk-container-center">
        <header class="panel-head homes-tit-1">
                <h2>Sản phẩm mới</h2>
            </header>
            <div class="panel-body">
          <ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 list-product" data-uk-grid-match="{target:'.title'}">
              <!-- iteam -->
              @foreach($articles as $val)
              <li>
                <div class="product product1 box-shadow">
                  <div class="thumb">
                      <a class="image img-cover img-shine" href="{{$val->category->slug}}/{{$val->slug}}"><img src="data/product/{{$val->img}}" alt="{{$val->name}}"></a>
                  </div>
                  <div class="infor">
                      <h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}">{{$val->name}}</a></h3>
                      <div class="contact-info">
                        <button>Tư vấn</button>
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
        </div>
      </div>
    </section>

    <section class="section5">
      <div class="uk-container-center">
        <header class="panel-head homes-tit-1">
                <h2>Sản phẩm mới</h2>
            </header>
            <div class="panel-body">
          <ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 list-product" data-uk-grid-match="{target:'.title'}">
              <!-- iteam -->
              @foreach($articles as $val)
              <li>
                <div class="product product1 box-shadow">
                  <div class="thumb">
                      <a class="image img-cover img-shine" href="{{$val->category->slug}}/{{$val->slug}}"><img src="data/product/{{$val->img}}" alt="{{$val->name}}"></a>
                  </div>
                  <div class="infor">
                      <h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}">{{$val->name}}</a></h3>
                      <div class="contact-info">
                        <button>Tư vấn</button>
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
        </div>
      </div>
    </section>

    <section class="section5">
      <div class="uk-container-center">
        <header class="panel-head homes-tit-1">
                <h2>Sản phẩm mới</h2>
            </header>
            <div class="panel-body">
          <ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 list-product" data-uk-grid-match="{target:'.title'}">
              <!-- iteam -->
              @foreach($articles as $val)
              <li>
                <div class="product product1 box-shadow">
                  <div class="thumb">
                      <a class="image img-cover img-shine" href="{{$val->category->slug}}/{{$val->slug}}"><img src="data/product/{{$val->img}}" alt="{{$val->name}}"></a>
                  </div>
                  <div class="infor">
                      <h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}">{{$val->name}}</a></h3>
                      <div class="contact-info">
                        <button>Tư vấn</button>
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
        </div>
      </div>
    </section>
  </div>
</div>
@endsection
