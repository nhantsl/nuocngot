<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        $user = Auth::user();
        $name = Auth::user()->name;
        $orders = $user->orders()->with('orderItems')->get();
        $products = Product::all();
        $totalOrders = $user->orders()->count();
        $totalAmount = Order::sum('total');
        $ordered = $user->orders()->where('status', 'ordered')->count();
        return view('users.index',compact(  'name','orders', 'totalOrders'
        ,'ordered','totalAmount','products'));
    }
}
