<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index()
    {
        // Example data (replace with dynamic support data if needed)
        $supportData = [
            'email' => 'support@marketplace.com',
            'phone' => '+250 788 123 456',
            'working_hours' => 'Monday - Friday, 8AM - 5PM',
        ];

        return view('support.index', compact('supportData'));
    }
}

