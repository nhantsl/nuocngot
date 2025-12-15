@extends('layouts.base')

@section('content')
<div class="container">
    <h2 class="text-center mb-4">Search Results</h2>

    @if ($products->count() > 0)
        <p class="alert alert-info text-center">
            Found <strong>{{ $products->count() }}</strong> result(s) for "<strong>{{ $query }}</strong>"
        </p>
        <div class="row g-sm-4 g-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-1 custom-gy-5 product-style-2 ratio_asos product-list-section">

            @foreach ($products as $product)
                <div>
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="{{ route('shop.product.details', ['slug' => $product->slug]) }}">
                                    <img src="../assets/images/fashion/product/{{ $product->image }}"
                                        class="bg-img blur-up lazyload" alt="">
                                </a>
                            </div>
                            <div class="cart-wrap">
                                <ul>
                                    <li>
                                        <a href="javascript:void(0)"
                                            onclick="event.preventDefault(); document.getElementById('addtocart-{{ $product->id }}').submit();"
                                            class="btn btn-solid hover-solid btn-animation">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>

                                        <form id="addtocart-{{ $product->id }}" method="post"
                                            action="{{ route('cart.store') }}" style="display:none;">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $product->id }}">
                                            <input type="hidden" name="quantity" value="1">
                                        </form>

                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i data-feather="eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)"
                                            onclick="addProductToWishlist({{ $product->id }}, '{{ addslashes($product->name) }}', 1, {{ $product->regular_price }})"
                                            class="wishlist">
                                            <i data-feather="heart"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-details">
                            <div class="rating-details">
                                <span class="font-light grid-content">{{ $product->category->name }}</span>
                                <ul class="rating mt-0">
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star theme-color"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                    <li>
                                        <i class="fas fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                            <div class="main-price">
                                <a href="{{ route('shop.product.details', ['slug' => $product->slug]) }}"
                                    class="font-default">
                                    <h5 class="ms-0">{{ $product->name }}</h5>
                                </a>
                                <div class="listing-content">
                                    <span class="font-light">{{ $product->category->name }}</span>
                                    <p class="font-light">{{ $product->short_description }}</p>
                                </div>
                                <h3 class="theme-color">{{ $product->regular_price }}</h3>
                                <button class="btn listing-content">Add To Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-warning text-center">
            <p>No products found for "<strong>{{ $query }}</strong>"</p>
        </div>
    @endif
</div>
@endsection