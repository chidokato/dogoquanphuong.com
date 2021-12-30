<?php use App\menu; ?>
<header class="pc-header uk-visible-large">
    <div class="uk-sticky-placeholder">
      <section class="lower uk-sticky-init uk-active" data-uk-sticky="{top: 0}">
          <div class="uk-container uk-container-center">
              <nav class="main-nav">
                  <!-- <a class="logo" href="index.php">
                      <img src="data/themes/{{$logo_trang->img}}">
                  </a> -->
                  <ul class="uk-navbar-nav uk-clearfix main-menu float_right">
                    <li><a href="{{asset('')}}">Trang chủ</a></li>
                    @foreach($menu_top as $val)
                    <?php $sub_menu = menu::where('classify','Main menu')->where('status','true')->where('parent', $val->id)->orderBy('view','asc')->get(); ?>
                    <li><a href="{{$val->slug}}">{{$val->name}}</a>
                      @if(count($sub_menu) > 0)
                      <div class="dropdown-menu">
                        <ul class="uk-list sub-menu">
                          @foreach($sub_menu as $sub)
                          <li><a href="{{$sub->slug}}">{{$sub->name}}</a></li>
                          @endforeach
                        </ul>
                      </div>
                      @endif
                    </li>
                    @endforeach
                  </ul>
              </nav><!-- .main-nav -->
          </div>
      </section>
  </div><!-- .lower -->
</header>

<header class="mobile-header uk-hidden-large">
    <section class="upper">
        <a class="moblie-menu-btn skin-1" href="#offcanvas" data-uk-offcanvas="{target:'#offcanvas'}">
            <span>Menu</span>
        </a>
        <div class="logo"><a href="#" title="Logo"><img src="data/themes/{{$logo->img}}" alt="Logo"></a></div>
        <a class="mobile-hotline" href="tel: {{$head_setting->hotline}}" title="Hotline">
            <span class="label">Hotline: </span>
            <span class="value">{{$head_setting->hotline}}</span>
        </a>
    </section><!-- .upper -->
    <!-- <section class="lower">
        <div class="mobile-search header-search">
            <form action="#" method="" class="uk-form form">
                <input type="text" name="" class="uk-width-1-1 input-text keyword" placeholder="Bạn muốn tìm gì hôm nay?">
                <button type="submit" name="" value="" class="btn-submit">Tìm kiếm</button>
            </form>
            <div class="searchResult"></div>
        </div>
    </section> -->
    <section class="menu-mobile">
      <ul>
        @foreach($menu_mobile as $val)
        <li><a href="{{$val->slug}}">{{$val->name}}</a></li>
        @endforeach
      </ul>
    </section>
    <style type="text/css">
      .menu-mobile{}
      .menu-mobile ul{ display: flex; justify-content: space-around; }
      .menu-mobile ul li{ list-style: none;
    padding: 5px;
    border-right: 1px solid #ddd;
    width: 20%;
    text-align: center; }
      .menu-mobile ul li a{  }
    </style>
</header>