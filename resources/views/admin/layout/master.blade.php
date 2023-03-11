<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Daycode | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    @include('admin.layout.partials.style')
</head>

<body data-topbar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- Header Page -->
        @include('admin.layout.navbar')
        <!-- End page -->

        <!-- ========== Left Sidebar Start ========== -->
        @include('admin.layout.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')
            <!-- End Page-content -->

            <!-- Footer Page Content -->
            @include('admin.layout.footer')
            <!-- End Footer Page Content -->

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    {{-- @include('admin.layout.rightbar') --}}
    <!-- /Right-bar -->

    <!-- Scripts -->
    @include('admin.layout.partials.scripts')
    <!-- End Scripts -->
</body>

</html>
