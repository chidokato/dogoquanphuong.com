<div class="uk-sticky-placeholder" style="height: 258px; margin: 0px;"><section class="aside-prd-detail aside-product" data-uk-sticky="{top: 70}" style="margin: 0px;">
    <header class="panel-head">
        <h3 class="heading"><span>Đăng ký nhận báo giá</span></h3>
    </header>
    <section class="panel-body">
        <form class="dangky" action="dang-ky" method="POST">
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
            <input type="hidden" name="link" value="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
            <input type="text" name="name" placeholder="Nhập tên">
            <input required="" type="tel" name="phone" placeholder="Nhập số điện thoại (*)">
            <input type="mail" name="email" placeholder="Nhập email">
            <input type="submit" name="btlsubmit" value="ĐĂNG KÝ">
        </form>
    </section>
</section></div>