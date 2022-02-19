<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard | Visitor Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}" >
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico')}}"> --}}

        {{-- <!-- Plugins css -->
        <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/selectize/css/selectize.bootstrap3.css')}}" rel="stylesheet" type="text/css" /> --}}

        <!-- App css -->
        <link href="{{ asset('assets/css/config/default/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
        <link href="{{ asset('assets/css/config/default/app.min.css')}}" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

        {{-- <link href="{{ asset('assets/css/config/default/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" />
        <link href="{{ asset('assets/css/config/default/app-dark.min.css')}} " rel="stylesheet" type="text/css" id="app-dark-stylesheet" /> --}}

 {{-- <!-- third party css -->
        <link href="{{ asset('assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- third party css end --> --}}

        <!-- icons -->
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
        alpha/css/bootstrap.css" rel="stylesheet"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">



        <!-- toster cdn  -->
	     <!-- jquery -->
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
         <!-- SweetAlert2 -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
         <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>



         <script
         src="https://code.jquery.com/jquery-3.6.0.min.js"
         integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
         crossorigin="anonymous"></script>
         <style>
            .swal2-icon.swal2-info{
               font-size: 15px ! important;
           },

           .swal-height {
           height: 40vh;
           }

   </style>
 @yield('css')
    </head>

    <!-- body start -->
    <body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": false}, "topbar": {"color": "dark"}, "showRightSidebarOnPageLoad": true}'>

