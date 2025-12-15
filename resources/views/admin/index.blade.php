@extends('layouts.base')
@section('content')
    <!-- Breadcrumb section start -->
    <section class="breadcrumb-section section-b-space">
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
                    <h3>Admin Dashboard</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.php">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb section end -->

    <!-- user dashboard section start -->
    <section class="section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs custome-nav-tabs flex-column category-option" id="myTab">
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light active" id="dashboard-tab" data-bs-toggle="tab"
                                data-bs-target="#dashboard" type="button" aria-controls="dashboard" aria-selected="true">
                                <i class="fas fa-angle-right"></i>Dashboard
                            </button>
                        </li>
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="orders-tab" data-bs-toggle="tab"
                                data-bs-target="#orders" type="button" aria-controls="orders" aria-selected="false">
                                <i class="fas fa-angle-right"></i>Manage Orders
                            </button>
                        </li>
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="products-tab" data-bs-toggle="tab"
                                data-bs-target="#products" type="button" aria-controls="products" aria-selected="false">
                                <i class="fas fa-angle-right"></i>Manage Products
                            </button>
                        </li>
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="brands-tab" data-bs-toggle="tab"
                                data-bs-target="#brands" type="button" aria-controls="brands" aria-selected="false">
                                <i class="fas fa-angle-right"></i>Manage Brands
                            </button>
                        </li>
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="categories-tab" data-bs-toggle="tab"
                                data-bs-target="#categories" type="button" aria-controls="categories"
                                aria-selected="false">
                                <i class="fas fa-angle-right"></i>Manage Categories
                            </button>
                        </li>
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="users-tab" data-bs-toggle="tab" data-bs-target="#users"
                                type="button" aria-controls="users" aria-selected="false">
                                <i class="fas fa-angle-right"></i>Manage Users
                            </button>
                        </li>
                        <li class="nav-item mb-2">
                            <button class="nav-link font-light" id="feedback-tab" data-bs-toggle="tab"
                                data-bs-target="#feedback" type="button" aria-controls="feedback" aria-selected="false">
                                <i class="fas fa-angle-right"></i>Feedback
                            </button>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-9">
                    <div class="filter-button dash-filter dashboard">
                        <button class="btn btn-solid-default btn-sm fw-bold filter-btn">Show Menu</button>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel"
                            aria-labelledby="dashboard-tab">
                            <div class="dashboard-right">
                                <div class="dashboard">
                                    <div class="order-box-contain my-4">
                                        <div class="row g-4">
                                            <!-- Total Orders -->
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/wishlist.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/wishlist1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Total Orders</h5>
                                                            <h3>{{ $totalOrders }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Total Amount -->
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/sent.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/sent1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Total Amount</h5>
                                                            <h3>{{ $totalAmount }}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Pending Orders -->
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/box.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/box1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Pending Orders</h5>
                                                            <h3>{{$ordered}}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Pending Orders Amount -->
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/money.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/money1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Pending Orders Amount</h5>
                                                            <h3>${{$totalOrdered}} </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Delivered Orders -->
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/delivered1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/delivered.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Delivered Orders</h5>
                                                            <h3>{{$delivered}} </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Delivered Orders Amount -->
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/money.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/money1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Delivered Orders Amount</h5>
                                                            <h3>${{$totalDelivered}}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Canceled Orders -->
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/canceled1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/canceled.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Canceled Orders</h5>
                                                            <h3>{{$canceled}} </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Canceled Orders Amount -->
                                            <div class="col-lg-4 col-sm-6">
                                                <div class="order-box">
                                                    <div class="order-box-image">
                                                        <img src="assets/images/svg/money.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                    </div>
                                                    <div class="order-box-contain">
                                                        <img src="assets/images/svg/money1.png"
                                                            class="img-fluid blur-up lazyload" alt="">
                                                        <div>
                                                            <h5 class="font-light">Canceled Orders Amount</h5>
                                                            <h3>${{$totalCanceled}}</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                            <div class="order-management">
                                <h3>Manage Orders</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Order ID</th>
                                            <th>Customer Name</th>
                                            <th>Address</th>
                                            <th>Total Amount</th>
                                            <th>Total Items</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->name }}</td>
                                                <td>{{ $order->city }}</td>
                                                <td>${{ number_format($order->total, 2) }}</td>
                                                <td>{{ $order->total_items}}</td>
                                                <td>{{ $order->status }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editOrderModal{{ $order->id }}"
                                                        data-id="{{ $order->id }}" data-name="{{ $order->name }}">
                                                        Edit
                                                    </button>
                                                    <form action="{{ route('admin.order.delete', $order->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Delete</button>
                                                    </form>
                                                    <button class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#orderDetailModal{{ $order->id }}">
                                                        View
                                                    </button>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="editOrderModal{{ $order->id }}" tabindex="-1"
                                                aria-labelledby="editOrderModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editOrderModalLabel">Edit
                                                                Order #{{ $order->id }}</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('admin.order.update', $order->id) }}" method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="mb-3">
                                                                    <label for="CustomerName{{ $order->id }}" class="form-label">Customer Name</label>
                                                                    <input type="text" class="form-control" 
                                                                           id="CustomerName{{ $order->id }}" 
                                                                           name="name" 
                                                                           value="{{ old('name', $order->name) }}" 
                                                                           required>
                                                                </div>
                                                        
                                                                <div class="mb-3">
                                                                    <label for="OrderStatus{{ $order->id }}" class="form-label">Status</label>
                                                                    <select class="form-select" id="OrderStatus{{ $order->id }}" name="status" required>
                                                                        <option value="ordered" {{ old('status', $order->status) === 'ordered' ? 'selected' : '' }}>
                                                                            Ordered
                                                                        </option>
                                                                        <option value="delivered" {{ old('status', $order->status) === 'delivered' ? 'selected' : '' }}>
                                                                            Delivered
                                                                        </option>
                                                                        <option value="canceled" {{ old('status', $order->status) === 'canceled' ? 'selected' : '' }}>
                                                                            Canceled
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Update Order</button>
                                                            </form>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="deleteOrderModal{{ $order->id }}"
                                                tabindex="-1" aria-labelledby="deleteOrderModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="deleteOrderModalLabel">Delete
                                                                Order #{{ $order->id }}</h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Bạn có chắc chắn muốn xóa không?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-bs-dismiss="modal">Hủy</button>
                                                            <button type="button" class="btn btn-danger">Xóa</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="orderDetailModal{{ $order->id }}" tabindex="-1" aria-labelledby="orderDetailModalLabel{{ $order->id }}" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="orderDetailModalLabel{{ $order->id }}">Order #{{ $order->id }} - {{ $order->name }}</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><strong>Status:</strong> {{ $order->status }}</p>
                                                            <p><strong>Total Amount:</strong> {{ number_format($order->total, 2) }} VND</p>
                                                            <p><strong>Customer Name:</strong> {{ $order->name }}</p>
                                                            <p><strong>Phone:</strong> {{ $order->phone }}</p>
                                                            <p><strong>Address:</strong> {{ $order->address }}</p>
                                                            <p><strong>City:</strong> {{ $order->city }}</p>
                                                            <p><strong>State:</strong> {{ $order->state }}</p>
                                        
                                                            <hr>
                                        
                                                            <h5>Order Items</h5>
                                                            <ul class="list-group">
                                                                @foreach($order->orderItems as $orderItem)
                                                                <li class="list-group-item d-flex align-items-center">
                                                                    <img src="{{ asset('assets/images/fashion/product/' . $orderItem->product->image) }}" 
                                                                         alt="{{ $orderItem->product->name }}" 
                                                                         class="img-fluid rounded-circle me-3" 
                                                                         style="width: 60px; height: 60px; object-fit: cover;">
                                                        
                                                                    <div class="d-flex flex-column">
                                                                        <strong>{{ $orderItem->product->name }}</strong>
                                                                        <small class="text-muted">x {{ $orderItem->quantity }}</small>
                                                                    </div>
                                                        
                                                                    <div class="ms-auto text-end">
                                                                        <div class="fw-bold">{{ number_format($orderItem->price, 2) }} VND</div>
                                                                        <div class="text-muted">{{ number_format($orderItem->quantity * $orderItem->price, 2) }} VND</div>
                                                                    </div>
                                                                </li>
                                                        
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="products" role="tabpanel" aria-labelledby="products-tab">

                            <div class="product-management">
                                <h3>Manage Products</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-primary mb-3" data-bs-toggle="modal"
                                            data-bs-target="#addProductModal">Add New Product</button>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $product->id }}</td>
                                                <td>{{ $product->name }}</td>
                                                <td>${{ number_format($product->regular_price, 2) }}</td>
                                                <td>{{ $product->stock_status }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm edit-button" data-bs-toggle="modal" data-bs-target="#editProductModal" data-id="{{ $product->id }}" data-name="{{ $product->name }}">
                                                        Edit
                                                    </button>                                                    
                                                    <form action="{{ route('admin.product.delete', $product->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa thương hiệu này?');">Delete</button>
                                                    </form>                                                  
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addProductModalLabel">Add New product</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('admin.product.store')}}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="ProductName" class="form-label">product Name</label>
                                                    <input type="text" class="form-control" id="ProductName" name="name"
                                                        required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add product</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editProductModalLabel">Chỉnh Sửa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.product.update', $product->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="ProductName" class="form-label">Tên</label>
                                                    <input type="text" class="form-control" id="ProductName" name="name" value="{{ $product->name }}" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>    
                       
                        <div class="tab-pane fade" id="brands" role="tabpanel" aria-labelledby="brands-tab">
                            <div class="brand-management">
                                <h3>Manage Brands</h3>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addBrandModal">Add
                                            New
                                            Brand</button>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Brand ID</th>
                                            <th>Brand Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($brands as $brand)
                                            <tr>
                                                <td>{{ $brand->id }}</td>
                                                <td>{{ $brand->name }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm edit-button" data-bs-toggle="modal" data-bs-target="#editBrandModal" data-id="{{ $brand->id }}" data-name="{{ $brand->name }}">
                                                        Edit
                                                    </button>                                                    
                                                    <form action="{{ route('admin.brand.delete', $brand->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Delete</button>
                                                    </form>                                                    
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        
                            <div class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="addBrandModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addBrandModalLabel">Add New Brand</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('admin.brand.store')}}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="brandName" class="form-label">Brand Name</label>
                                                    <input type="text" class="form-control" id="brandName" name="name"
                                                        required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add Brand</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="editBrandModal" tabindex="-1" aria-labelledby="editBrandModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editBrandModalLabel">Chỉnh Sửa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.brand.update', $brand->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="brandName" class="form-label">Tên</label>
                                                    <input type="text" class="form-control" id="brandName" name="name" value="{{ $brand->name }}" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>

                        <div class="tab-pane fade" id="categories" role="tabpanel" aria-labelledby="categories-tab">
                            <div class="category-management">
                                <h3>Manage Categories</h3>
                                <div class="row">
                                    <div class="col-md-12 mb-3">
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Add
                                            New
                                            Category</button>
                                    </div>
                                </div>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Category ID</th>
                                            <th>Category Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->id }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm edit-button" data-bs-toggle="modal" data-bs-target="#editCategoryModal" data-id="{{ $category->id }}" data-name="{{ $category->name }}">
                                                        Edit
                                                    </button>                                                    
                                                    <form action="{{ route('admin.category.delete', $category->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Delete</button>
                                                    </form>                                                  
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        
                            <div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addCategoryModalLabel">Add New category</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('admin.category.store')}}" method="POST">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="CategoryName" class="form-label">category Name</label>
                                                    <input type="text" class="form-control" id="CategoryName" name="name"
                                                        required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Add category</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editCategoryModalLabel">Chỉnh Sửa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="CategoryName" class="form-label">Tên</label>
                                                    <input type="text" class="form-control" id="CategoryName" name="name" value="{{ $category->name }}" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>                 
                        </div>

                        <div class="tab-pane fade" id="users" role="tabpanel" aria-labelledby="users-tab">
                            <div class="user-management">
                                <h3>Manage Users</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <button class="btn btn-warning btn-sm edit-button" data-bs-toggle="modal" data-bs-target="#editUserModal" data-id="{{ $user->id }}" data-name="{{ $user->name }}">
                                                        Edit
                                                    </button>                                                    
                                                    <form action="{{ route('admin.user.delete', $user->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Delete</button>
                                                    </form>                                                  
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        
                            <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editUserModalLabel">Chỉnh Sửa</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('admin.user.update', $user->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <div class="mb-3">
                                                    <label for="UserName" class="form-label">Tên</label>
                                                    <input type="text" class="form-control" id="UserName" name="name" value="{{ $user->name }}" required>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Cập Nhật</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>                      
                        </div>

                        <div class="tab-pane fade" id="feedback" role="tabpanel" aria-labelledby="feedback-tab">
                            <div class="feedback">
                                <h3>Feedback</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($feedbacks as $feedback)
                                            <tr>
                                                <td>{{ $feedback->id }}</td>
                                                <td>{{ $feedback->first_name }}</td>
                                                <td>{{ $feedback->email }}</td>
                                                <td>{{ $feedback->comment }}</td>                                                
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>                    
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--  dashboard section end -->
@endsection

@push("scripts")
    <script>
        $(function () {
            $("#myFile").on("change", function (e) {
                const photoInp = $("#myFile");
                const [file] = this.files;
                if (file) {
                    $("#imgpreview img").attr('src', URL.createObjectURL(file));
                    $("#imgpreview").show();
                }
            });

            $("input[name='name']").on("change", function () {
                $("input[name='slug']").val(StringToSlug($(this).val()));
            });

        });

        function StringToSlug(Text) {
            return Text.toLowerCase()
                .replace(/[^\w ]+/g, "")
                .replace(/ +/g, "-");
        }
    </script>
@endpush
