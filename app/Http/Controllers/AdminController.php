<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index(){
        $orders = Order::with('orderItems')->get();
        $products = Product::all();
        $brands = Brand::all();
        $categories = Category::all();
        $users = User::all();
        $totalOrders = Order::count();
        $totalAmount = Order::sum('total');
        $ordered = Order::where('status', 'ordered')->count();
        $totalOrdered = Order::where('status', 'ordered')->sum('total');
        $delivered = Order::where('status', 'delivered')->count();
        $totalDelivered = Order::where('status', 'delivered')->sum('total');
        $canceled = Order::where('status', 'canceled')->count();
        $totalCanceled = Order::where('status', 'canceled')->sum('total');
        $feedbacks = Contact::all();
        return view('admin.index',compact( 'feedbacks','totalOrdered','totalDelivered','totalCanceled','ordered','delivered', 'canceled','totalAmount','totalOrders', 'orders',
        'products', 'brands', 'categories', 'users'));
    }

    public function delete_order($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->route('admin.index')->with('status', 'xóa thành công!');
    }

    public function edit_order($id)
    {
        $order = Order::find($id);
        return view('admin.order-edit',compact('order'));
    }

    public function update_order(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $order = Order::findOrFail($id);
        $order->name = $request->name;
        $order->status = $request->status;
        $order->save();

        return redirect()->route('admin.index')->with('success', 'cập nhật thành công.');
    }

    public function add_brand()
    {
         return view("admin.brand-add");
    }

    public function add_brand_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Brand::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('admin.index')->with('success', 'thêm thành công.');
    }

    public function edit_brand($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand-edit',compact('brand'));
    }

    public function update_brand(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $brand = Brand::findOrFail($id);
        $brand->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name), 
        ]);
        return redirect()->route('admin.index')->with('success', 'cập nhật thành công.');
    }

    public function delete_brand($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
        return redirect()->route('admin.index')->with('status', 'xóa thành công!');
    }

    public function add_category()
    {
         return view("admin.category-add");
    }

    public function add_category_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('admin.index')->with('success', 'thêm thành công.');
    }

    public function edit_category($id)
    {
        $category = category::find($id);
        return view('admin.category-edit',compact('category'));
    }

    public function update_category(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $category = category::findOrFail($id);
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('admin.index')->with('success', 'Thương hiệu đã được cập nhật thành công.');
    }

    public function delete_category($id)
    {
        $category =category::find($id);
        $category->delete();
        return redirect()->route('admin.index')->with('status', 'xóa thành công!');
    }

    public function add_product()
    {
         return view("admin.product-add");
    }

    public function add_product_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        Product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'regular_price' => $request->regular_price ?? '10',
            'SKU' => $request -> SKU ?? 'e',
            'image' => $request -> image ?? '',
            'images' => $request -> images ?? '',
            'category_id' => $request -> category ?? '1',
            'brand_id' => $request -> category ?? '1',
            'short_description' => $request->short_description ?? '',
            'description' => $request->description ?? '',
        ]);
        return redirect()->route('admin.index')->with('success', 'thêm thành công.');
    }

    public function edit_product($id)
    {
        $product = Product::find($id);
        return view('admin.product-edit',compact('product'));
    }

    public function update_product(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('admin.index')->with('success', 'Thương hiệu đã được cập nhật thành công.');
    }

    public function delete_product($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.index')->with('status', 'xóa thành công!');
    }

    public function edit_user($id)
    {
        $user = User::find($id);
        return view('admin.user-edit',compact('user'));
    }

    public function update_user(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $user = User::findOrFail($id);
        $user->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('admin.index')->with('success', 'Thương hiệu đã được cập nhật thành công.');
    }

    public function delete_user($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.index')->with('status', 'xóa thành công!');
    }
}
