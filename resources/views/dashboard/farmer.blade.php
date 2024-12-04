<!doctype html>
<html lang="en" dir="ltr">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>
<title>:: Farmer Dashboard ::</title>

<!-- Bootstrap Core and Vendor -->
<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css" />

<!-- Core css -->
<link rel="stylesheet" href="assets/css/main.css"/>
<link rel="stylesheet" href="assets/css/theme1.css"/>
</head>

<body class="font-montserrat">
    <div class="container mx-auto">
        <!-- Farmer Dashboard Header -->
        <div class="flex justify-between items-center py-4">
            <h1 class="text-xl font-bold">Farmer Dashboard</h1>
            <span>Welcome, {{ auth()->user()->name }}</span>
        </div>

        <!-- Crop Information -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="font-semibold text-lg">Crops Information</h2>
                <ul>
                    <li>Tomatoes: 500kg</li>
                    <li>Rice: 1000kg</li>
                    <li>Wheat: 300kg</li>
                </ul>
            </div>

            <!-- Farm Inventory -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="font-semibold text-lg">Farm Inventory</h2>
                <ul>
                    <li>Fertilizer: 100kg</li>
                    <li>Seeds: 50 packets</li>
                    <li>Tools: 5 items</li>
                </ul>
            </div>

            <!-- Financial Overview -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="font-semibold text-lg">Financial Overview</h2>
                <div class="flex justify-between">
                    <span>Income:</span>
                    <span>Loading...</span>
                </div>
                <div class="flex justify-between">
                    <span>Expenses:</span>
                    <span>Loading...</span>
                </div>
                <div class="flex justify-between">
                    <span>Profit:</span>
                    <span>Loading...</span>
                </div>
            </div>
        </div>

        <!-- My Products -->
        <h1>My Products</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('products.delete', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>



















+