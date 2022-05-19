@extends('master.masteryi')
@section('title', 'day la trang index')
@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://jollibee.com.vn/uploads/group/640f3ac55b0e2b-bannerthcn.jpg" alt="First slide">
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="product-item">
                <img src="https://jollibee.com.vn/uploads/dish/b531a521fb40c9-combo2cjpng1.png" alt="">
                <h3 class="product__title">02 GÀ GIÒN VUI VẺ + 01 KHOAI VỪA + 01 LON MIRINDA SORBET</h3>
                <p class="product__price">69.000 đ</p>
                <button class="btn">Đặt hàng</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
                <img src="https://jollibee.com.vn/uploads/dish/00242882b8d70c-combocjspapng1.png" alt="">
                <h3 class="product__title">01 GÀ GIÒN VUI VẺ + 01 MỲ Ý SỐT BÒ BẰM + 01 KHOAI VỪA + 01 LON MIRINDA SORBET</h3>
                <p class="product__price">69.000 đ</p>
                <button class="btn">Đặt hàng</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="product-item">
                <img src="https://jollibee.com.vn/uploads/dish/92c0d21532f9bf-combo149khcmc.png" alt="">
                <h3 class="product__title">02 GÀ SỐT CAY + 02 MỲ Ý SỐT BÒ BẰM + 01 KHOAI TÂY CHIÊN VỪA + 2 LY PEPSI VỪA</h3>
                <p class="product__price">149.000 đ</p>
                <button class="btn">Đặt hàng</button>
            </div>
        </div>
    </div>
</div>

@endsection