<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PROJECT MANAGEMENT APP') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Styles -->  
    <link rel="stylesheet" href="{{asset('dist/css/perfect-scrollbar.css')}}" >
    <link rel="stylesheet" href="{{asset('dist/css/material-design-iconic-font.min.css')}}" >
    <link rel="stylesheet" href="{{asset('dist/css/custom.css')}}" >
    <link rel="stylesheet" href="{{asset('dist/datatables/dataTables.bootstrap4.min.css')}}" >
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}" >
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
      integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
      crossorigin="anonymous"
    />
</head>
<body>
    <div id="app">
        @include('layouts.include.header')

        <main class="py-2" style="margin-top:70px;">
            @yield('content')
        </main>
    </div>
    <script type="text/javascript" src="{{asset('dist/js/jquery.min.js')}}" ></script> 
    <script type="text/javascript" src="{{asset('dist/js/perfect-scrollbar.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/js/bootstrap.bundle.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/js/app.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/js/jquery.sparkline.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/js/countUp.min.js')}}" ></script> 
    <script type="text/javascript" src="{{asset('dist/js/jquery-ui.min.js')}}" ></script>     
    <script type="text/javascript" src="{{asset('dist/js/jqvmap/jquery.vmap.min.js')}}" ></script>      
    <script type="text/javascript" src="{{asset('dist/js/jqvmap/maps/jquery.vmap.world.js')}}" ></script>

    <script type="text/javascript" src="{{asset('dist/datatables/jszip/jszip.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/datatables/pdfmake/pdfmake.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/datatables/pdfmake/vfs_fonts.js')}}" ></script>    
    <script type="text/javascript" src="{{asset('dist/datatables/datatables.net/js/jquery.dataTables.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/datatables/datatables.net-bs4/js/dataTables.bootstrap4.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/datatables/datatables.net-buttons/js/dataTables.buttons.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/datatables/datatables.net-buttons/js/buttons.flash.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/datatables/datatables.net-responsive/js/dataTables.responsive.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/datatables/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/datatables/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}" ></script>

    <script type="text/javascript" src="{{asset('dist/datatables/datatables.net-buttons/js/buttons.colVis.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/datatables/datatables.net-buttons/js/buttons.print.min.js')}}" ></script>
    <script type="text/javascript" src="{{asset('dist/datatables/datatables.net-buttons/js/buttons.html5.min.js')}}" ></script>

    <script type="text/javascript">
        $(document).ready(function(){
        App.init();
        $.fn.DataTable.ext.pager.numbers_length=4,$.extend(!0,$.fn.dataTable.defaults,{dom:"<'row be-datatable-header'<'col-sm-6'l><'col-sm-6'f>><'row be-datatable-body'<'col-sm-12'tr>><'row be-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"}),$("#table1").dataTable({buttons:["excel","pdf","print"],columnDefs: [{ "searchable": true, "targets": 0 }],lengthMenu:[[10,50,100,150,-1],[10,50,100,150,"All"]],dom:"<'row be-datatable-header'<'col-sm-6'l><'col-sm-6 text-right'B>><'row be-datatable-body'<'col-sm-12'tr>><'row be-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>"});

        });
    </script>
</body>
</html>
