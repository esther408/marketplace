<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Weather Information</h1>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">{{ $weatherData['location'] }}</h4>
                <p class="card-text">Temperature: {{ $weatherData['temperature'] }}°C</p>
                <p class="card-text">Condition: {{ $weatherData['condition'] }}</p>
                <p class="card-text">Humidity: {{ $weatherData['humidity'] }}%</p>
                <p class="card-text">Wind Speed: {{ $weatherData['wind_speed'] }} km/h</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
