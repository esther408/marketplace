<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Dashboard - @yield('title')</title>

    <!-- Include Bootstrap or any CSS framework -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">

    @stack('styles') <!-- Additional styles can be added from child views -->
</head>
<body>
    <div id="app">
        <!-- Sidebar -->
        <nav class="sidebar bg-dark text-white">
            <h2 class="text-center py-3">Admin Panel</h2>
            <ul class="list-unstyled">
                <li><a href="{{ route('admin.dashboard') }}" class="text-white">Dashboard</a></li>
                <li><a href="{{ route('admin.users.index') }}" class="text-white">Users</a></li>
                <li><a href="{{ route('admin.products.index') }}" class="text-white">Products</a></li>
                <li><a href="{{ route('admin.reports') }}" class="text-white">Reports</a></li>
                <li><a href="{{ route('logout') }}" class="text-white"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </nav>

        <!-- Main Content -->
        <div class="main-content">
            <header class="navbar navbar-expand-lg navbar-light bg-light">
                <h1>@yield('header', 'Admin Dashboard')</h1>
            </header>
            <main class="container my-4">
                @yield('content') <!-- Content from child views -->
            </main>
        </div>
    </div>

    <!-- Include Scripts -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/admin.js') }}"></script>

    @stack('scripts') <!-- Additional scripts can be added from child views -->
</body>
</html>