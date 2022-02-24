
@include('./body.header')

<!-- Begin page -->
<div id="wrapper">
<!-- Topbar Start -->
@include('./body.navbar')
<!-- end Topbar -->
    <!-- ========== Left Sidebar Start ========== -->
    @include('./body.sidebar')
    <!-- Left Sidebar End -->
</div>
<!-- END wrapper -->
@yield('admin')
@include('./body.footer')
<!-- /Right-bar -->
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<!-- {{ asset('backend/')}} -->

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Vendor js -->
<script src=" {{ asset('/assets/js/vendor.min.js')}}"></script>
<!-- Plugins js-->
{{-- <script src="{{ asset('/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{ asset('/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{ asset('/assets/libs/selectize/js/standalone/selectize.min.js')}}"></script> --}}
<!-- Dashboar 1 init js-->
{{-- <script src="{{ asset('/assets/js/pages/dashboard-1.init.js')}}"></script> --}}
   <!-- third party js -->
   <script src="{{ asset('/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{ asset('/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js')}}"></script>
   <script src="{{ asset('/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
   <script src="{{ asset('/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js')}}"></script>
   <script src="{{ asset('/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
   <script src="{{ asset('/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js')}}"></script>
   <script src="{{ asset('/assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
   <script src="{{ asset('/assets/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
   <script src="{{ asset('/assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
   <script src="{{ asset('/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
   <script src="{{ asset('/assets/libs/datatables.net-select/js/dataTables.select.min.js')}}"></script>
   {{-- <script src="{{ asset('/assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
   <script src="{{ asset('/assets/libs/pdfmake/build/vfs_fonts.js')}}"></script> --}}
   {{-- <script src="{{ asset('/assets/js/chart.js')}}"></script>
   <script type="text/javascript" src="{{asset('assets/js/echarts.min.js')}}"></script> --}}

   <script src="{{ asset('/assets/js/axios.min.js')}}"></script>
   <!-- third party js ends -->
   <!-- Datatables init -->
   <script src="{{ asset('assets/js/pages/datatables.init.js')}}"></script>
   <script src="https://code.iconify.design/2/2.0.4/iconify.min.js"></script>
<!-- App js-->
<script src="{{ asset('/assets/js/app.min.js')}}"></script>
<script  src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}
{{-- bar chart js --}}
{{-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> --}}
{{-- for payment --}}
{{-- <script src="https://code.jquery.com/jquery-1.8.3.min.js"
integrity="sha256-YcbK69I5IXQftf/mYD8WY0/KmEDCv1asggHpJk1trM8=" crossorigin="anonymous"></script> --}}
{{-- <script id="myScript"
        src="https://scripts.sandbox.bka.sh/versions/1.2.0-beta/checkout/bKash-checkout-sandbox.js"></script> --}}



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- noster notify js function  start -->


{{-- ///////toastar start//////// --}}
<script>
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info')}}"
    switch (type) {
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
            break;
        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
            break;
        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
            break;
        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
              break;
              default:
            break;
    }
    @endif
    </script>
  {{-- ///////toastar starts//////// --}}
  <script>
    $(function(){
      $(document).on('click','#delete',function(e){
          e.preventDefault();
          var link = $(this).attr("href");
                    Swal.fire({
                    width: 400,
                    padding: '3em',
                    customClass: 'swal-height',
                    title: 'Are you sure?',
                    icon: 'error',
                      showCancelButton: false,
                      confirmButtonColor: '#3085D6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                      if (result.isConfirmed) {
                        window.location.href = link
                        Swal.fire(
                          'Deleted!',
                          'Your file has been deleted.',
                          'success'
                        )
                      }
                    })
      });
    });
  </script>

@stack('js')
{{-- ///////toastar end//////// --}}












</body>


</html>
