<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    public function index()
    {
        $usersCount = User::count();
        $productsCount = Product::count();
        $ordersCount = Order::count();
        $revenue = Order::sum('total_price');

        return view('admin.dashboard', compact('usersCount', 'productsCount', 'ordersCount', 'revenue'));
    }

    public function reports()
    {
        // Generate analytics or downloadable reports
        return view('admin.reports');
    }
}
    //

    