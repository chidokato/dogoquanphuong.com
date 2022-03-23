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
        <div class="uk-width-large-3-4 menu-left ">
          <section class="prd-detail">
            <section class="panel-body">
              <div class="uk-grid uk-grid-medium">
                <div class="uk-width-large-1-2">
                  <div class="">
                    <div class="">
                      <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                        <li > 
                          <a class="image img-cover" href="data/product/{{$articles->img}}" data-uk-lightbox="{group:'gallerys'}">
                            <img src="data/product/{{$articles->img}}" />
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="uk-width-large-1-2">
                  <div class="prd-desc">
                    <h1 class="prd-title"><span>{{$articles->name}}</span></h1>
                    <div class="price">Giá: {{ $articles->product->price ? $articles->product->price : "Liên hệ" }}</div>
                    <p>Kích thước: {{ $articles->product->size ? $articles->product->size : "..." }}</p>
                    <p>Sản phẩm gồm: {{ $articles->product->include ? $articles->product->include : "..." }}</p>
                    <!-- <div class="description">
                        <p style="text-align: justify;">Gỗ công nghiệp là một trong số những chất liệu nội thất được nhiều người ưa chuộng bởi vẻ đẹp và chất lượng của nó. <strong>Tủ bếp gỗ công nghiệp đẹp</strong> của GleeHome có thiết kế hiện đại, tiện nghi và vô cùng sang trọng. <strong>Tủ bếp gỗ công nghiệp đẹp </strong>của chúng tôi còn là sản phẩm có chất lượng cao hứa hẹn sẽ là sự lựa chọn hoàn hảo cho phòng bếp gia đình.<br /></p>
                    </div> -->
                    <div class="call-groups">
                      <a class="btn uk-flex uk-flex-middle uk-flex-space-between" href="tel:0166.7272.072" title="Showroom 1" style="margin-right: 10px">
                        <div class="text">
                          <span class="title">0911388799</span>
                          <!-- <span class="subtitle">Showroom 1</span> -->
                        </div>
                        <!-- <span class="number"></span> -->
                      </a>

                      <a class="btn uk-flex uk-flex-middle uk-flex-space-between" href="tel:0911388799" title="Showroom 2">
                        <div class="text">
                          <span class="title">0911388799</span>
                          <!-- <span class="subtitle">0911388799</span> -->
                        </div>
                        <!-- <span class="number"></span> -->
                      </a>
                    </div>
                    
                    <div class="prd-commitment">
                      <ul class="uk-grid uk-grid-small uk-grid-width-1-3">
                        <li>
                          <div class="box">
                            <span class="icon"><img src="data/camket.png" alt="" /></span>
                            <span class="value">Cam kết <br> chất lượng</span>
                          </div>
                        </li>
                        <li>
                          <div class="box">
                            <span class="icon"><img src="data/giaohangmienphi.png" alt="" /></span>
                            <span class="value">Giao hàng <br> toàn quốc</span>
                          </div>
                        </li>
                        <li>
                          <div class="box">
                            <span class="icon"><img src="data/thanhtoan.png" alt="" /></span>
                            <span class="value">Thanh toán <br> tại nhà</span>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="contact-info prd-contact uk-flex uk-flex-middle" style="display: flex;flex-direction: row;">
                      <button style="margin-right: 20px;" onclick="myFunction()">Tư vấn</button>
                      <button class="cart" onclick="cart()">Đặt hàng</button>
                    </div>

                    <!-- <div class="prd-contact uk-flex uk-flex-middle" style="margin-top: 20px">
                      <a class="btn btn-map" href="" title="Chỉ đường">Chỉ đường</a>
                      <a class="btn btn-contact" href="tel:0941438688" title="Liên hệ">Liên hệ</a>
                    </div> -->
                  </div><!-- .prd-desc -->
                </div>
              </div><!-- .uk-grid -->
            </section><!-- .panel-body -->
          </section><!-- .prd-detail -->
          <section>
            <header class="panel-head homes-tit-1">
              <h2 style="font-weight: 100;">Chi tiết sản phẩm</h2>
            </header>
            <div class="content">
                {!! $articles->content !!}
            </div>
            <ul class="uk-grid lib-grid-20 uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2 ditail-img">
              @foreach($articles->images as $img)
              <li>
                <a class="image img-cover" href="data/product/{{$img->img}}" data-uk-lightbox="{group:'gallerys'}">
                  <img src="data/product/{{$img->img}}" />
                </a>
              </li>
              @endforeach
            </ul>
          </section>
        </div>
        <div class="uk-width-large-1-4 menu-left uk-visible-large">
        <header class="panel-head homes-tit-1">
                <h2>Sản phẩm liên quan</h2>
            </header>
            <div class="panel-body">
          <ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-1 uk-grid-width-large-1-1 list-product" data-uk-grid-match="{target:'.title'}">
              <!-- iteam -->
              @foreach($lienquan as $val)
              <li>
                <div class="product product1 box-shadow">
                  <div class="thumb">
                      <a class="image img-cover img-shine" href="{{$val->category->slug}}/{{$val->slug}}"><img src="data/product/{{$val->img}}" alt="{{$val->name}}"></a>
                  </div>
                  <div class="infor">
                      <h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}">{{$val->name}}</a></h3>
                      <div class="contact-info" style="justify-content: space-between;">
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
      </div>

      </div>
      </div>
  </div>
</div>
<style type="text/css">
  .contact-info button{padding: 10px 20px; border-radius: 5px}
  .prd-desc .price{
        margin-bottom: 10px;
    font-size: 1.5rem;
    font-weight: bold;
    color: #cd2626;
  }
  .contact-info {
    display: flex;
    justify-content: flex-start;
}
</style>
@endsection

@section('css')
@endsection

@section('script')
<script>
  $(document).ready(function() {
  var wd_width = $(window).width();
  if(wd_width > 600) {
    $("#content-slider").lightSlider({
      loop:true,
      keyPress:true
    });
    $('#image-gallery').lightSlider({
      gallery:true,
      item:1,
      thumbItem:5,
      slideMargin: 0,
      speed:500,
      auto:true,
      loop:true,
      onSliderLoad: function() {
        $('#image-gallery').removeClass('cS-hidden');
      }  
    });
  }else {
    $("#content-slider").lightSlider({
      loop:true,
      keyPress:true
    });
    $('#image-gallery').lightSlider({
      gallery:true,
      item: 1,
      thumbItem: 3,
      slideMargin: 0,
      speed:500,
      auto:true,
      loop:true,
      onSliderLoad: function() {
        $('#image-gallery').removeClass('cS-hidden');
      }  
    });
  }

  });
</script>
@endsection