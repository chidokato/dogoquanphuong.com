<div onclick="myFunction()" id="bgblack" class="bgblack"></div>
<div onclick="cart()" id="bgblackcart" class="bgblack"></div>
<div id="myDIV" class="form">
  <div class="title">TƯ VẤN SẢN PHẨM</div>
  <form method="post" action="gui-form">
    <p>Tôi muốn tư vấn sản phẩm này, vui lòng liên hệ với tôi theo số điện thoại bên dưới</p>
    <input type="text" name="phone" placeholder="số điện thoại ...">
      <div class="contact-info">
      <button>GỬI ĐI</button>
      </div>
  </form>
  <div onclick="myFunction()" class="close">x</div>
</div>

<div id="cart" class="form">
  <div class="title">ĐẶT HÀNG NGAY</div>
  <form method="post" action="dat-hang">
    <p>Tôi muốn tư vấn sản phẩm này, vui lòng liên hệ với tôi theo số điện thoại bên dưới</p>
    <input type="text" name="name" placeholder="Họ & Tên ...">
    <input type="text" name="phone" placeholder="số điện thoại ...">
    <textarea rows="3" name="content" placeholder="Ghi chú ..."></textarea>
      <div class="contact-info">
      <button>GỬI ĐI</button>
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
.bgblack{
  position: fixed; top: 0; left: 0; width: 100%; height: 100vh; background: #0000006b; display: none; z-index: 999;
}
.form{
  position: fixed;
  top: 100px;
  right: 40%;
  width: 20%;
  background: #fff;
  z-index: 9999;
  color: #000;
  display: none;
  box-shadow: 0px 0px 6px 2px #fff; 
  padding: 15px;
}
.mystyle {
  display: block;
}
.form .title{font-size: 1.2rem; text-align: center;background: #000; color: #fff; padding: 15px; margin-bottom: 10px;}
.form input{ padding: 10px; width: 100%; margin-bottom: 10px; }
.form textarea{ padding: 10px; width: 100%; margin-bottom: 10px; }
.form .close{
  position: absolute;
    top: -10px;
    right: -10px;
    background: #000;
    color: #fff;
    width: 20px;
    height: 20px;
    text-align: center;
    line-height: 20px;
    border-radius: 50px;
    box-shadow: 0px 0px 5px 5px #000;
    cursor: pointer;
    font-family: tahoma !important;
    font-weight: bold;
}
</style>