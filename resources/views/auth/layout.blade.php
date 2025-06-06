<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dashboard') - {{ config('app.name') }} Admin Panel</title>
   <!-- plugins:css -->
   <link rel="stylesheet" href="admin/assets/vendors/feather/feather.css">
   <link rel="stylesheet" href="admin/assets/vendors/ti-icons/css/themify-icons.css">
   <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
   <link rel="stylesheet" href="admin/assets/vendors/font-awesome/css/font-awesome.min.css">
   <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
   <!-- endinject -->
   <!-- Plugin css for this page -->
   <!-- End plugin css for this page -->
   <!-- inject:css -->
   <link rel="stylesheet" href="admin/assets/css/style.css">
   <!-- endinject -->
   <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
  <body>

    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
          <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
              <div class="col-lg-4 mx-auto">
                <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                  <div class="brand-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="logo">
                  </div>
                  
                  @yield('content')

                </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/template.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>                 