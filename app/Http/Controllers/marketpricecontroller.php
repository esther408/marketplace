<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketPriceController extends Controller
{
    public function index()
    {
        // Example data for market prices
        $marketPrices = [
            ['product' => 'Tomatoes', 'price' => 2.5, 'unit' => 'kg'],
            ['product' => 'Milk', 'price' => 1.2, 'unit' => 'L'],
            ['product' => 'Potatoes', 'price' => 1.0, 'unit' => 'kg'],
        ];

        return view('farmer.market_prices', compact('marketPrices'));
    }
}

