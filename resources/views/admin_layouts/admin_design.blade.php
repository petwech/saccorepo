<!DOCTYPE html>
<html lang="en">


<!-- /bt4/inverse/index.html  [XR&CO'2014], Mon, 22 Mar 2021 13:08:31 GMT -->

@include('admin_layouts.admin_header')

@include('admin_layouts.admin_topbar')
@include('admin_layouts.admin_leftsidebar')

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
     @yield('content')
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
       @include('admin_layouts.admin_footer')
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/node_modules/backend/jquery/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('assets/node_modules/backend/popper/popper.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/backend/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('dist/js/backend/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('dist/js/backend/waves.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('dist/js/backend/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('dist/js/backend/custom.min.js') }}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ asset('assets/node_modules/backend/raphael/raphael-min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/backend/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('assets/node_modules/backend/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Popup message jquery -->
    <script src="{{ asset('assets/node_modules/backend/toast-master/js/jquery.toast.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('dist/js/backend/dashboard1.js') }}"></script>
    <script src="{{ asset('assets/node_modules/backend/toast-master/js/jquery.toast.js') }}"></script>
</body>


<!-- /bt4/inverse/index.html  [XR&CO'2014], Mon, 22 Mar 2021 13:10:05 GMT -->
</html>
