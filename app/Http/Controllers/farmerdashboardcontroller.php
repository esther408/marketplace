<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_listings;

class FarmerDashboardController extends Controller
{
    public function index()
    {
        // Get products by current farmer (logged in user)
        $products = Product_listings::where('user_id', auth()->id())->get();
        
        
        // Count total products
        $productsCount = $products->count();
        
        // Count sold products
        $soldProducts = $products->where('status', 'sold')->count();
        
        // Calculate earnings (sum of prices for sold products)
        $earnings = $products->where('status', 'sold')->sum('price');

        // Return the view with data
        return view('farmer.dashboard', compact('products', 'productsCount', 'soldProducts', 'earnings'));
    }
}