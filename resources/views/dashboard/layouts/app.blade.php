<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-1/4 bg-gray-800 text-white h-screen">
            <div class="p-6">
                
                <h2 class="text-2xl font-semibold">Marketplace</h2>
                <ul class="mt-4">
                    <li><a href="{{ route('farmer.dashboard') }}">Farmer Dashboard</a></li>
                    <li><a href="{{ route('buyer.dashboard') }}">Buyer Dashboard</a></li>
                    <li><a href="{{ route('expert.dashboard') }}">Expert Dashboard</a></li>
                </ul>
            </div>
        </div>

        <!-- Content Area -->
        <div class="w-3/4 p-6">
            @yield('content')
        </div>
    </div>
</body>
</html>
