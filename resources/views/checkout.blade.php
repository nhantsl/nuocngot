@extends('layouts.base')
@section('content')
<section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Checkout</h3>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Cart Section Start -->
<section class="section-b-space">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-8">
                <form class="needs-validation" method="POST" action="{{ route('checkout.checkout') }}">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                    <div class="container">
                        <div id="billingAddress" class="row g-4">
                            <h3 class="mb-3 theme-color">Địa Chỉ</h3>
                            <div class="col-md-6">
                                <label for="name" class="form-label">Họ và Tên</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nhập Họ và Tên" required>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Số Điện Thoại</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Nhập Số Điện Thoại" required>
                            </div>
                            <div class="col-md-12">
                                <label for="address" class="form-label">Địa Chỉ</label>
                                <textarea class="form-control" id="address" name="address" required></textarea>
                            </div>
                            <div class="col-md-3">
                                <label for="city" class="form-label">Thành Phố</label>
                                <select class="form-select custome-form-select" id="city" name="city" required>
                                    <option selected disabled value="">Chọn...</option>
                                    <option value="SAIGON">Sài Gòn</option>
                                    <option value="HANOI">Hà Nội</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="state" class="form-label">Quận/Huyện</label>
                                <select class="form-select custome-form-select" id="state" name="state" required>
                                    <option selected disabled value="">Chọn...</option>
                                    <option value="Quan1">Quận 1</option>
                                    <option value="Quan2">Quận 2</option>
                                </select>
                            </div>

                            <hr class="my-lg-5 my-4">

                            <h3 class="mb-3">Payment</h3>

                            <div class="d-block my-3">
                                <div class="form-check custome-radio-box">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" checked=""
                                        id="cod">
                                    <label class="form-check-label" for="cod">COD</label>
                                </div>
                                <div class="form-check custome-radio-box">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="debit">
                                    <label class="form-check-label" for="debit">Debit card</label>
                                </div>

                                <div class="form-check custome-radio-box">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="paypal">
                                    <label class="form-check-label" for="paypal">PayPal</label>
                                </div>
                            </div>
                            <div class="row g-4" style="display: none;">
                                <div class="col-md-6">
                                    <label for="cc-name" class="form-label">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name">
                                    <div id="emailHelp" class="form-text">Full name as displayed on card</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="cc-number" class="form-label">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number">
                                    <div class="invalid-feedback">Credit card number is required</div>
                                </div>
                                <div class="col-md-3">
                                    <label for="expiration" class="form-label">Expiration</label>
                                    <input type="text" class="form-control" id="expiration">
                                </div>
                                <div class="col-md-3">
                                    <label for="cc-cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv">
                                </div>
                            </div>
                        </div>                
                        <button class="btn btn-solid-default mt-4" type="submit">Đặt Hàng</button>
                    </div>
                </form>
            </div>

            <div class="col-lg-4">
                <div class="your-cart-box">
                    <h3 class="mb-3 d-flex text-capitalize">Your cart<span
                            class="badge bg-theme new-badge rounded-pill ms-auto bg-dark"> {{Cart::instance('cart')->content()->count()}}</span>
                    </h3>
                    <ul class="list-group mb-3">



                        <li class="list-group-item d-flex justify-content-between lh-condensed active">
                            <div class="text-dark">
                                <h6 class="my-0">Tax</h6>
                                <small></small>
                            </div>
                            <h6><span>${{Cart::instance('cart')->tax()}}</span></h6>                            
                        </li>
                        <li class="list-group-item d-flex lh-condensed justify-content-between">
                            <span class="fw-bold">Sub Total (USD)</span>
                            <h6><span>${{Cart::instance('cart')->subtotal()}}</span></h6>
                        </li>
                        <li class="list-group-item d-flex lh-condensed justify-content-between">
                            <span class="fw-bold">Total (USD)</span>
                            <h6><span>${{Cart::instance('cart')->total()}}</span></h6>
                        </li>
                    </ul>

                    <form class="card border-0">
                        <div class="input-group custome-imput-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-solid-default rounded-0">Redeem</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
</section>
<!-- Cart Section End -->
@endsection