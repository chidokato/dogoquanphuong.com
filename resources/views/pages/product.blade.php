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
    <header class="panel-head homes-tit-1">
      <h2>{{$category->name}}</h2>
    </header>
    <ul class="uk-grid lib-grid-20 uk-grid-width-1-1 uk-grid-width-medium-1-3 uk-grid-width-large-1-3 list-product" data-uk-grid-match="{target:'.title'}">
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
    <button id="myBtn">Tư vấn</button>
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
  <div class="uk-width-large-1-4 menu-left uk-visible-large">
    ád
  </div>
</div>

</div>
</div>
</section>
</div>
</div>


<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>Modal Header</h2>
    </div>
    <div class="modal-body">
      <p>Some text in the Modal Body</p>
      <p>Some other text...</p>
    </div>
    <div class="modal-footer">
      <h3>Modal Footer</h3>
    </div>
  </div>
</div>

<script type="text/javascript">
    // Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<style>

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 400px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}
</style>
@endsection