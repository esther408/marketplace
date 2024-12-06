<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index()
    {
        // Example weather data (replace with dynamic data if needed)
        $weatherData = [
            'location' => 'Kigali, Rwanda',
            'temperature' => 26, // in Celsius
            'condition' => 'Sunny',
            'humidity' => 55,
            'wind_speed' => 10, // in km/h
        ];

        return view('farmer.weather', compact('weatherData'));
    }
}

