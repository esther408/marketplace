<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Support Information</h1>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Contact Us</h4>
                <p class="card-text">Email: {{ $supportData['email'] }}</p>
                <p class="card-text">Phone: {{ $supportData['phone'] }}</p>
                <p class="card-text">Working Hours: {{ $supportData['working_hours'] }}</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
