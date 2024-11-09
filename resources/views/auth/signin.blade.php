<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Login Basic </title>

    <meta name="description" content="" />

   <link rel="stylesheet" href="../assets/css/style.css">
    
    

    <!-- Icons. Uncomment required icon fonts -->
    
  </head>

  <body background-image="public/assets/img/hero-img-2.jpg" >
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
       
            <div class="card-body">
              <div class="form-head">
              
              <h1>LOGIN HERE</h1>
              <h4 class="mb-2">Welcome to market place! 👋</h4>

              <form id="formAuthentication" class="mb-3" action="{{route('login')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email or Username</label><br>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email-username"
                    placeholder="Enter your email or username"
                    autofocus
                  />
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label><br>
                    <a href="/for" class="link">
                      <small>Forgot Password?</small><br>
                    </a>
                   
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    /><br>
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" />
                    <label class="form-check-label" for="remember-me"> Remember Me </label><br>
                  </div>
                </div>
                
                  <button class="btn-primary" type="submit">Sign in</button>
               
              </form>

              <p class="text-center">
                <span>New on our platform?</span><br>
                <a href="/register" class="link">
                  <span>Create an account</span>
                </a>
                <a href="/home" class="link">
                  <span>dashboard</span>
                </a>
              </p>
              </div></div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>

    <!-- / Content -->

   

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    
  </body>
</html>
