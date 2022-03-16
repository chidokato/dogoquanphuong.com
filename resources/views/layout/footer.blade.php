<div class="uk-grid ">
  <div class="uk-width-large-1-6 menu-left uk-visible-large">
  </div>
  <div class="uk-width-large-5-6 body">
    <footer class="footer"><!-- FOOTER -->
  <div class="uk-container uk-container-center customer-container">
    <section class="upper">
      <div class="uk-grid uk-grid-medium">
        <div class="uk-width-small-1-2 uk-width-large-1-4 uk-width-xlarge-1-4">
          <section class="panel ft-contact">
            <header class="panel-head">
              <h3 class="heading"><span>Thông tin liên hệ</span></h3>
            </header>
            <section class="panel-body">
              <ul class="uk-list list">
                <li class="location">{{$head_setting->address}}</li>
                <li class="phone"><a href="tel: {{$head_setting->hotline}}" title="Hotline">{{$head_setting->hotline}}</a></li>
                <li class="email"><a href="mailto: Minhtk1730@gmail.com" title="Email">{{$head_setting->email}}</a></li>
              </ul>
            </section>
          </section><!-- .panel -->
        </div>
        <div class="uk-width-small-1-2 uk-width-large-1-4 uk-width-xlarge-1-4">
          <section class="panel">
            <header class="panel-head">
              <h3 class="heading"><span>Danh mục sản phẩm</span></h3>
            </header>
            <section class="panel-body">
              <ul class="uk-list site-link">
                @foreach($menu_product as $val)
                <li><a href="{{$val->slug}}">{{$val->name}}</a></li>
                @endforeach
              </ul>
            </section>
          </section><!-- .panel -->
        </div>
        <div class="uk-width-small-1-2 uk-width-large-1-4 uk-width-xlarge-1-4">
          <section class="panel">
            <header class="panel-head">
              <h3 class="heading"><span>Danh mục</span></h3>
            </header>
            <section class="panel-body">
              <ul class="uk-list site-link">
                @foreach($menu_top as $val)
                <li><a href="{{$val->slug}}">{{$val->name}}</a></li>
                @endforeach
              </ul>
            </section>
          </section><!-- .panel -->
        </div>
        
        <div class="uk-width-small-1-2 uk-width-large-1-4 uk-width-xlarge-1-4 lib-visible-xlarge">
          <section class="panel ft-subscribe">
            <header class="panel-head">
              <h3 class="heading"><span>Giới thiệu</span></h3>
            </header>
            <section class="panel-body">
              <div class="title" style="color:#fff !important;"><p><font color="#545454" face="arial, sans-serif" size="2">Đồ gỗ Quân Phương là đơn vị thiết kế và xản suất đồ gỗ nguyên khối hàng đầu của miền Bắc, luôn lấy được sự hài lòng và thiện cảm tuyệt đối từ khách hàng ...</font></p>
</div>
              
            </section>
          </section><!-- .panel -->
        </div>
      </div><!-- .uk-grid -->
    </section><!-- .upper -->
  </div>

  <!-- <section class="lower">
    <div class="uk-container uk-container-center customer-container"> 
      <div class="uk-flex uk-flex-middle uk-flex-space-between container">
        <div class="copyright">© 2021 by <a href="#" title="">chidokato</a>. All rights reserved | Design by <span onclick="return false;" title="chidokato">chidokato</span></div>
        <div class="ft-social uk-visible-large">
          <ul class="uk-list uk-clearfix">
            <li class="facebook"><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li class="google"><a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
            <li class="instagram"><a href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li class="twitter"><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
            <li class="youtube"><a href="#" title="youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section> -->
</footer>
  </div>
</div>


<!-- <div class="hotline-fixed uk-hidden-large">
  <a href="tel: 0911388799" title="Hotline">
    <span class="label">Hotline: </span>
    <span class="value">{{$head_setting->hotline}}</span>
  </a>
</div> -->

<div class="social-button">
    <div class="social-button-content" style="display: none;">
       <a href="tel:{{$head_setting->hotline}}" class="call-icon" rel="nofollow">
          <i class="fa fa-whatsapp" aria-hidden="true"></i>
          <div class="animated alo-circle"></div>
          <div class="animated alo-circle-fill  "></div>
           <span>Hotline: {{$head_setting->hotline}}</span>
        </a>
        <!-- <a href="sms:0981481368" class="sms">
          <i class="fa fa-weixin" aria-hidden="true"></i>
          <span>SMS: 098 148 1368</span>
        </a> -->
        <a target="_blank" href="{{$head_setting->facebook}}" class="mes">
          <i class="fa fa-facebook-square" aria-hidden="true"></i>
          <span>Nhắn tin Facebook</span>
        </a>
        <a target="_blank" href="http://zalo.me/{{$head_setting->hotline}}" class="zalo">
          <i class="fa fa-commenting-o" aria-hidden="true"></i>
          <span>Zalo: {{$head_setting->hotline}}</span>
        </a>
    </div>
       
    <a class="user-support">
      <i class="fa fa-user-circle-o" aria-hidden="true"></i>
      <div class="animated alo-circle"></div>
      <div class="animated alo-circle-fill"></div>
    </a>
  </div>

  <style>
    .social-button{
      display: inline-grid;
        position: fixed;
        bottom: 15px;
        left: 45px;
        min-width: 45px;
        text-align: center;
        z-index: 99999;
    }
    .social-button-content{
      display: inline-grid;   
    }
    .social-button a {padding:8px 0;cursor: pointer;position: relative;}
    .social-button i{
      width: 40px;
        height: 40px;
        background: #65462b;
        color: #fff;
        border-radius: 100%;
        font-size: 20px;
        text-align: center;
        line-height: 1.9;
        position: relative;
        z-index: 999;box-shadow: 0px 0px 2px 2px;
    }
    .social-button span{
      display: none;
    }
    .alo-circle {
        animation-iteration-count: infinite;
        animation-duration: 1s;
        animation-fill-mode: both;
        animation-name: zoomIn;
        width: 50px;
        height: 50px;
        top: 3px;
        right: -3px;
        position: absolute;
        background-color: transparent;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid rgba(101 70 43 / 45%);
        opacity: .1;
        border-color: #65462b;
        opacity: .5;
    }
    .alo-circle-fill {
      animation-iteration-count: infinite;
      animation-duration: 1s;
      animation-fill-mode: both;
      animation-name: pulse;
        width: 60px;
        height: 60px;
        top: -2px;
        right: -8px;
        position: absolute;
        -webkit-transition: all 0.2s ease-in-out;
        -moz-transition: all 0.2s ease-in-out;
        -ms-transition: all 0.2s ease-in-out;
        -o-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        border-radius: 100%;
        border: 2px solid transparent;
        background-color: rgba(101 70 43 / 45%);
        opacity: .75;
    }
    .call-icon:hover > span, .mes:hover > span, .sms:hover > span, .zalo:hover > span{display: block}
    .social-button a span {
        border-radius: 2px;
        text-align: center;
        background: rgb(173 114 63);
        padding: 9px;
        display: none;
        width: 180px;
        margin-left: 10px;
        position: absolute;
        color: #ffffff;
        z-index: 999;
        top: 9px;
        left: 40px;
        transition: all 0.2s ease-in-out 0s;
        -moz-animation: headerAnimation 0.7s 1;
        -webkit-animation: headerAnimation 0.7s 1;
        -o-animation: headerAnimation 0.7s 1;
        animation: headerAnimation 0.7s 1;
    }
    @-webkit-keyframes "headerAnimation" {
        0% { margin-top: -70px; }
        100% { margin-top: 0; }
    }
    @keyframes "headerAnimation" {
        0% { margin-top: -70px; }
        100% { margin-top: 0; }
    }
    .social-button a span:before {
      content: "";
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 10px 10px 10px 0;
      border-color: transparent rgb(173 114 63) transparent transparent;
      position: absolute;
      left: -10px;
      top: 10px;
    }
  </style>

  <script>
  $(document).ready(function(){
    $('.user-support').click(function(event) {
      $('.social-button-content').slideToggle();
    });
    });
</script>


<?php use App\menu; ?>
<div id="offcanvas" class="uk-offcanvas offcanvas">
  <div class="uk-offcanvas-bar">
    <form class="uk-search" action="" data-uk-search="">
        <input class="uk-search-field" type="search" name="keyword" placeholder="Tìm kiếm...">
        </form>
   <ul class="l1 uk-nav uk-nav-offcanvas uk-nav uk-nav-parent-icon" data-uk-nav>
    <li class="l1 ">
      <a href="{{asset('')}}" class="l1">Trang chủ</a>
    </li>
    @foreach($menu_product as $val)
    <?php $sub_menu = menu::where('status','true')->where('parent', $val->id)->orderBy('view','asc')->get(); ?>
    @if(count($sub_menu) == 0)
    <li class="l1 ">
      <a href="{{$val->slug}}" class="l1"><img src="data/category/{{$val->img}}"> {{$val->name}}</a>
    </li>
    @else
    <li class="l1 uk-parent uk-position-relative">
      <a href="#" title="" class="dropicon"></a>
      <a href="{{$val->slug}}" class="l1"><img src="data/category/{{$val->img}}"> {{$val->name}}</a>
      <ul class="l2 uk-nav-sub">
          @foreach($sub_menu as $sub)
          <li class="l2"><a href="{{$sub->slug}}" class="l2"><img src="data/category/{{$val->img}}"> {{$sub->name}}</a></li>
          @endforeach
        </ul>
    </li>
    @endif
    @endforeach
    
  </ul>
  </div>
</div><!-- #offcanvas --> 

<script src="frontend/function.js"></script>

<script src="frontend/uikit/js/components/slideshow.min.js"></script>
<script src="frontend/uikit/js/components/slider.min.js"></script>
<script src="frontend/uikit/js/components/sticky.min.js"></script>
<script src="frontend/uikit/js/components/accordion.min.js"></script>
<script src="frontend/uikit/js/components/lightbox.min.js"></script>
<script src="frontend/plugins/Readmore/readmore.min.js"></script>
<script src="frontend/plugins/lightslider-master/dist/js/lightslider.min.js"></script>
<script src="frontend/library/js/library.js"></script>
<script src="frontend/templates/acore/function.js" type="text/javascript"></script>
<script src="frontend/mask/jquery.mask.min.js" type="text/javascript"></script>

<div id="modal-cart" class="uk-modal">
  <div class="uk-modal-dialog" style="width:768px;">
    <a class="uk-modal-close uk-close"></a>
    <div class="cart-content">

    </div>
  </div>
</div>
<div id="modal-alert" class="uk-modal">
  <div class="uk-modal-dialog uk-modal-dialog-small">
     <a class="uk-modal-close uk-close"></a>
    <div class="alert-content"></div>
  </div>
</div>