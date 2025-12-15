<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $products = Product::latest()->take(12)->get();
        $news = Product::latest()->take(8)->get();
        return view('index', ['products' => $products, 'news' => $news]);
    }

    public function search(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ input 'q'
        $query = $request->input('q');

        // Nếu có từ khóa tìm kiếm
        if ($query) {
            // Tìm kiếm sản phẩm theo tên hoặc mô tả
            $products = Product::where('name', 'like', '%' . $query . '%')
                               ->get();
        } else {
            // Nếu không có từ khóa, trả về tất cả sản phẩm
            $products = Product::all();
        }

        // Trả về view với kết quả tìm kiếm và từ khóa tìm kiếm
        return view('search', compact('products', 'query'));
    }
}
