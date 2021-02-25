<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>@yield('page_title')</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="{{asset('master/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
        <link rel="stylesheet" href="{{asset('master/assets/vendors/css/vendor.bundle.base.css')}}">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="{{asset('master/assets/css/style.css')}}">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="{{asset('master/assets/images/icon.png')}}" />
        <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    </head>
    <body>
        <div class="container-scroller">

            <!-- partial:../../partials/_navbar.html -->
            @include('layouts.partial.navbar')
            <!-- partial -->

            <div class="container-fluid page-body-wrapper">

                <!-- partial:../../partials/_sidebar.html -->
                @include('layouts.partial.sidebar')
                <!-- partial -->

                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="page-header">
                            <h3 class="page-title"> @yield('page_header') </h3>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">@yield('breadcrumb')</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@yield('breadcrumb_active')</li>
                                </ol>
                            </nav>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card" >
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:../../partials/_footer.html -->
                    @include('layouts.partial.footer')
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>

        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{asset('master/assets/vendors/js/vendor.bundle.base.js')}}"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="{{asset('master/assets/js/off-canvas.js')}}"></script>
        <script src="{{asset('master/assets/js/hoverable-collapse.js')}}"></script>
        <script src="{{asset('master/assets/js/misc.js')}}"></script>
        <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
        @stack('scripts')
    </body>
</html>
