<div onclick="myFunction()" id="bgblack" class="bgblack"></div>
<div onclick="cart()" id="bgblackcart" class="bgblack"></div>
<div id="myDIV" class="form">
  <div class="title">TƯ VẤN SẢN PHẨM</div>
  <form method="post" action="dang-ky">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
    <input type="hidden" name="link" value="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
    <p>Tôi muốn tư vấn sản phẩm này, vui lòng liên hệ với tôi theo số điện thoại bên dưới</p>
    <input type="text" name="phone" placeholder="số điện thoại ...">
      <div class="contact-info">
      <button type="submit">GỬI ĐI</button>
      </div>
  </form>
  <div onclick="myFunction()" class="close">x</div>
</div>

<div id="cart" class="form">
  <div class="title">ĐẶT HÀNG NGAY</div>
  <form method="post" action="dang-ky">
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <input type="hidden" name="link" value="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
    <p>Tôi muốn tư vấn sản phẩm này, vui lòng liên hệ với tôi theo số điện thoại bên dưới</p>
    <input type="text" name="name" placeholder="Họ & Tên ...">
    <input type="text" name="phone" placeholder="số điện thoại ...">
    <textarea rows="3" name="content" placeholder="Ghi chú ..."></textarea>
      <div class="contact-info">
      <button type="submit">GỬI ĐI</button>
      </div>
  </form>
  <div onclick="cart()" class="close">x</div>
</div>

<script>
function myFunction() {
   var myDIV = document.getElementById("myDIV");
   var bgblack = document.getElementById("bgblack");
   myDIV.classList.toggle("mystyle");
   bgblack.classList.toggle("mystyle");
}

function cart() {
   var cart = document.getElementById("cart");
   var bgblackcart = document.getElementById("bgblackcart");
   cart.classList.toggle("mystyle");
   bgblackcart.classList.toggle("mystyle");
}
</script>


<style>

</style>