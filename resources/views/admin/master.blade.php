<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Start Bootstrap - SB Admin Version 2.0 Demo</title>

    <!-- Core CSS - Include with every page -->
    <link href="{{ asset('/') }}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}/admin/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Dashboard -->
    <link href="{{ asset('/') }}/admin/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}/admin/css/plugins/timeline/timeline.css" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="{{ asset('/') }}/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">

       @include('admin.includes.header')
       @include('admin.includes.menu')


    </nav>
<div id="page-wrapper">
    <div class="row">
        @yield('body')
    </div>
</div>
</div>
<!-- /#wrapper -->

<!-- Core Scripts - Include with every page -->
<script src="{{ asset('/') }}/admin/js/jquery-1.10.2.js"></script>
<script src="{{ asset('/') }}/admin/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}/admin/js/plugins/metisMenu/jquery.metisMenu.js"></script>

<!-- Page-Level Plugin Scripts - Dashboard -->
<script src="{{ asset('/') }}/admin/js/plugins/morris/raphael-2.1.0.min.js"></script>
<script src="{{ asset('/') }}/admin/js/plugins/morris/morris.js"></script>

<!-- SB Admin Scripts - Include with every page -->
<script src="{{ asset('/') }}/admin/js/sb-admin.js"></script>

<!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
<script src="{{ asset('/') }}/admin/js/demo/dashboard-demo.js"></script>

</body>

</html>

