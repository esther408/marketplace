<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Soccer :: Login</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Core css -->
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}"/>
<link rel="stylesheet" href="{{asset('assets/css/theme1.css')}}"/>

</head>
<body class="font-montserrat">

<div class="auth">
       
    <div class="auth_left">
        <p>"Welcome! Please log in with your username and password to access the system. If you don't have an account, click on the Sign Up link to create a new one."</p>
      <form  method="post" action="{{ route('login') }}">
      @csrf
   
        <div class="card">
            <div class="text-center mb-2">
                <a class="header-brand" href="index-2.html"><i class="fa fa-soccer-ball-o brand-logo"></i></a>
            </div>
            <div class="card-body">
                <div class="card-title">Login to your account</div>
                <div class="form-group">
                <label for="role">Role</label>
        <select id="role" name="role" required>
            <option value="farmer">Farmer</option>
            <option value="buyer">Buyer</option>
            <option value="expert">Expert</option>
            <option value="driver">Driver</option>
        </select>
                </div>
               
                <div class="form-group">
                <label class="form-label">email or username</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp" name="email" placeholder="Enter email" value="{{ old('email') }}">
                </div>
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <div class="form-group">
                    <label class="form-label">Password<a href="/for" class="float-right small">I forgot password</a></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror"  name="password" placeholder="Password" value="{{ old('password') }}">
                </div>
                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" />
                    <span class="custom-control-label">Remember me</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </div>
            <div class="text-center text-muted">
                Don't have account yet? <a href="/register">Sign up</a>
            </div>
        </div>
        </form>     
    </div>
    
    <div class="auth_right full_img"></div>
</div>

<script src="{{asset('assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{asset('assets/js/core.js')}}"></script>
</body>

<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->
</html>
