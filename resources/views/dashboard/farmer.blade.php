<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h4 class="text-center mt-3"><div>
    <h1>Welcome Farmer!</h1>
    <p>Your ID is: {{ auth()->id() }}</p>
</div></h4>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('farmer.products') }}">
                                My Products
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('farmer.add_product') }}">
                                Add Product
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('farmer.market_prices') }}">
                                Market Prices
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('farmer.weather') }}">
                                Weather Forecast
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('support') }}">
                                Support
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Welcome, {{ auth()->user()->firstname }}!</h1>
                </div>

                <!-- Statistics -->
                <div class="row mb-4">
    <div class="col-md-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h4 class="card-title">Product Listings</h4>
                <p class="card-text">You have <strong>{{ $productsCount ?? 0 }}</strong> products listed.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Sold Products</h5>
                <p class="card-text display-4">{{ $soldProducts ?? 0 }}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-white bg-info">
            <div class="card-body">
                <h5 class="card-title">Earnings</h5>
                <p class="card-text display-4">${{ $earnings ?? 0 }}</p>
            </div>
        </div>
    </div>
</div>


                <!-- Products Section -->
                <h2>My Products</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Product Name</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category }}</td>
            <td>{{ $product->quantity }} {{ $product->unit }}</td>
            <td>${{ $product->price }}</td>
            <td>{{ $product->status }}</td>
        </tr>
        @endforeach
    </tbody>
                </table>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
