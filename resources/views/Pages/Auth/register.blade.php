<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Vito - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="/assets/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="/assets/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="/assets/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="/assets/css/responsive.css">
   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
        <!-- Sign in Start -->
        <section class="sign-in-">
            <div class="container mt-5 p-0 bg-white">
                <div class="row no-gutters">
                    <div class="col-sm-6 align-self-center">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Sign Up</h1>
                            <p>Enter your email address and password to access admin panel.</p>
                            @if ($errors->any())
                            @foreach($errors->all() as $error)
                                <ul>
                                    <li class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </li>
                                </ul>
                            @endforeach
                            @endif
                            <form class="mt-4" action="{{ Route('dangKy') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail2">Email address</label>
                                    <input name="email" type="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input name="password" type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Re-Password</label>
                                    <input name="re-password" type="password" class="form-control mb-0" id="exampleInputPassword1" placeholder="Re-Password">
                                </div>
                                <div class="d-inline-block w-100">
                                    <span class="dark-color d-inline-block line-height-2">Already Have Account ? <a href="/dang-nhap">Log In</a></span>

                                    <button type="submit" class="btn btn-primary float-right">Sign Up</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="sign-in-detail text-white">
                            <a class="sign-in-logo mb-5" href="#"><img src="/assets/images/logo-white.png" class="img-fluid" alt="logo"></a>
                            <div class="slick-slider11">
                                <div class="item">
                                    <img src="/assets/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="/assets/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                                <div class="item">
                                    <img src="/assets/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Manage your orders</h4>
                                    <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="/assets/js/jquery.min.js"></script>
      <script src="/assets/js/popper.min.js"></script>
      <script src="/assets/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="/assets/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="/assets/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="/assets/js/waypoints.min.js"></script>
      <script src="/assets/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="/assets/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="/assets/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="/assets/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="/assets/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="/assets/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="/assets/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="/assets/js/smooth-scrollbar.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="/assets/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="/assets/js/custom.js"></script>
   </body>
</html>
