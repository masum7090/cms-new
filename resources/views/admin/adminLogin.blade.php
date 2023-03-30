<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CIMS</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/css/vertical-layout-light/style.css')}}">
</head>

<body id="login_body">
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapperr d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="card" style="text-align:center;">
                            <div class="text-center py-5 px-4 px-sm-5"
                                style="background-color:#fff; border-radius:5%; ">
                                <div class="brand-logo">
                                    <img src="{{asset('assets/images/CMS_ALL_NEW_BLACK.gif')}}"
                                        style="width:220px; margin-top:-70px;" alt="logo">
                                </div>
                                <h4 style="margin-top:-70px; font-size:20px;">College Monitoring System (CMS)</h4>
                                <h6 class="font-weight-light">National University, Bangladesh</h6>
                                <form class="pt-3 text-left" method="POST" action="{{url('admin/admin-login')}}">
                                    @csrf
                                    <label for="email" style="background-color:#fff; margin-left:10px; color:#969696; fony-size:18px;font-weight: bold;"><span>{{ __('Admin Email') }}</span><span style="color:#C11F1F;"> *</span></label>
                                    <div class="form-group"  style="margin-top:-29px;">
                                        <input id="email" type="email" style="font-size:14px; padding:15px;"
                                            class="form-control form-control-sm rounded @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example@nu.ac.bd"
                                            autofocus>
                                            @if(Session::has('error-msg'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ Session::get('error-msg') }}</strong>
                                                </span>
                                            @endif
                                        <!-- @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror -->

                                    </div>
                                    <label for="password" style="background-color:#fff; margin-left:10px; color:#969696; fony-size:18px; font-weight: bold;"><span>{{ __('Password') }}</span><span style="color:#C11F1F;"> *</span></label>
                                    <div class="form-group" style="margin-top:-29px;">
                                        <input id="password" type="password" style="font-size:14px; padding:15px;"
                                            class="form-control form-control-sm rounded @error('password') is-invalid @enderror"
                                            name="password" required autocomplete="current-password"
                                            placeholder="Enter password here">
                                        <!-- @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror -->
                                    </div>
                                    <!-- <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="mt-3 text-center">
                                       
                                            <button type="submit" class="btn btn-primary" style="background-color:#2F2D9C; color:#fff; padding-left:20%; padding-right:20%;">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                            @endif
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- plugins:js -->
    <!-- <script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>  -->
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('assets/js/dataTables.select.min.js')}}"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('assets/js/template.js')}}"></script>
    <script src="{{asset('assets/js/settings.js')}}"></script>
    <script src="{{asset('assets/js/todolist.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/Chart.roundedBarCharts.js')}}"></script>
    <script src="{{asset('assets/js/animate.js')}}"></script>
    <!-- End custom js for this page-->
</body>

</html>
