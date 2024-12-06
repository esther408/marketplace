<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_listings;  // Hindura aha ku Product_listing
use App\Models\Order;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        
        $products_count = Product_listings::count();  // Hindura Product kuba Product_listing
        $orders_count = Order::count();
        $users_count = User::count();

        return view('/', compact('products_count', 'orders_count', 'users_count'));
    }

    public function dashbord()
    {
        // Hindura Product::all() kuba Product_listing::all()
        $products = Product_listings::all(); // Hindura Product kuba Product_listing
        $products_count = $products->count();
        dd($products_count); // Debugging line
        return view('dashboard', compact('products', 'products_count'));
    }

    public function orders()
    {
        $orders = Order::with('product', 'user')->get();
        return view('dashboard.orders', compact('orders'));
    }

    public function users()
    {
        $users = User::all();
        return view('dashboard.users', compact('users'));
    }
}
