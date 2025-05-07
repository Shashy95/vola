<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Dashboard') - {{ config('app.name') }} Admin Panel</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/js/select.dataTables.min.css')}}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.png')}}" />
    @yield('styles')
  </head>
  <body>
    <div class="container-scroller">
        
        <!-- partial:partials/_navbar.html -->
        @include('admin.partials.navbar')
        <!-- partial -->
        
        <div class="container-fluid page-body-wrapper">
          <!-- partial:partials/_sidebar.html -->
          @include('admin.partials.sidebar')
          <!-- partial -->
          
          <div class="main-panel">
            <div class="content-wrapper">
              @yield('content')
            </div>
            <!-- content-wrapper ends -->
            
            <!-- partial:partials/_footer.html -->
            @include('admin.partials.footer')
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
      
      <!-- plugins:js -->

    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{asset('admin/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/datatables.net-bs5/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>
    <script src="{{asset('admin/assets/js/dataTables.select.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('admin/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('admin/assets/js/template.js')}}"></script>

    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="{{asset('admin/assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('admin/assets/js/data-table.js')}}"></script>
    <script src="{{asset('admin/assets/vendors/tinymce/tinymce.min.js')}}"></script>
    <script>
      if ($("#tinyMceExample").length) {
        tinymce.init({
        selector: '#tinyMceExample', // Target textarea with class="tinymce"
        height: 300,
        menubar: false,
        plugins: 'lists',
        toolbar: 'undo redo | insert | styleselect | formatselect | bold italic underline | alignleft aligncenter alignright | bullist numlist | outdent indent | removeformat',
        license_key: 'gpl',
        block_formats: 'Paragraph=p; Heading 1=h1; Heading 2=h2; Heading 3=h3'
     });
      }
    </script>
    <!-- SweetAlert CSS and JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
@if (session('success'))
  swal.fire({
  toast: true,
  position: 'top-end',
  text: '{{ session('success') }}',
  icon: 'success', // For success messages
  showConfirmButton: false,
  timer: 5000,
    });
@endif

@if (session('error'))
  swal.fire({
  toast: true,
  position: 'top-end',
  text: '{{ session('error') }}',
  icon: 'error', // For error messages
  showConfirmButton: false,
  timer: 5000,
  });
@endif
     
</script>

<script>
  // Attach event listener to all delete forms
  document.querySelectorAll('.delete-form').forEach(form => {
      form.addEventListener('submit', function(e) {
          e.preventDefault(); // Prevent form from submitting immediately
          Swal.fire({
              title: 'Are you sure?',
              text: "You won't be able to revert this!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
              if (result.isConfirmed) {
                  form.submit(); // Submit the form if user confirms
              }
          });
      });
  });
</script>

    @yield('scripts')

</body>
</html>

