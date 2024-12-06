<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/register.html  07 Jan 2020 03:42:43 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Soccer :: Register</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}"/>

<!-- Core css -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css')}}"/>
<link rel="stylesheet" href="{{ asset('assets/css/theme1.css')}}"/>


</head>
<body class="font-montserrat">

<div class="auth">
    <div class="auth_left">
<div class="">@if ($errors->has('password'))
    <div>{{ $errors->first('password') }}</div>
@endif

</div>
    <div class="">
    @if(session('success'))
    <div>{{ session('success') }}</div>
@endif
    @if(session('fail'))
    <div>{{ session('fail') }}</div>
@endif
</div>
    <form action="{{ route('register.store') }}" method="POST">
    @csrf
        <div class="card">
            <div class="text-center mb-5">
                <a class="header-brand" href="/"><i class="fa fa-soccer-ball-o brand-logo"></i></a>
            </div>
            <div class="card-body">
                <div class="card-title">Create new account</div>
                <div class="form-group">
                    <label class="form-label">firstname</label>
                    <input type="text" value="{{ old('firstname')}}" class="form-control" placeholder="Enter name" name="firstname">
                </div>
                <div class="form-group">
                    <label class="form-label">lastname</label>
                    <input type="text" value="{{ old('lastname')}}" class="form-control" placeholder="Enter name" name="lastname">
                </div>
                <div class="form-group">
                    <label class="form-label">phone</label>
                    <input type="number" value="" class="form-control" placeholder="Enter phone" name="phone">
                </div>
                <div class="form-group">
        <label for="role">Role</label>
        <select id="role" name="role" required>
            <option value="farmer">Farmer</option>
            <option value="buyer">Buyer</option>
            <option value="expert">Expert</option>
            <option value="driver">Driver</option>
            <option value="Admin">Admin</option>
        </select>
    </div>
                <div class="form-group">
                    <label class="form-label">Email address</label>
                    <input value="{{ old('email')}}" type="email" class="form-control" placeholder="Enter email" name="email">
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                </div>
                <div class="form-group">
                    <label class="form-label">confirm Password</label>
                    <input type="password" class="form-control" placeholder="confirm Password" name="password_confirmation" required>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label">Agree the <a href="#">terms and policy</a></span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Create new account</button>
                </div>
            </div>
            <div class="text-center text-muted">
                Already have account? <a href="{{route('login')}}">Sign in</a>
            </div>
        </div>
        </form></div>
    <div class="auth_right full_img"></div>
</div>

<script src="{{ asset('assets/bundles/lib.vendor.bundle.js"></script>
<script src="{{ asset('assets/js/core.js"></script>
</body>

<!-- soccer/project/register.html  07 Jan 2020 03:42:43 GMT -->
</html>

