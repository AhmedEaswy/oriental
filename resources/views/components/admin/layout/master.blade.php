<!doctype html>
<html lang="{{ current_local() }}" dir="{{ current_dir() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
<!-- Custom fonts for this template-->
    <link href="{{ asset('assets/admin/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    {{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
    {{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
  @if(app()->getLocale() == 'en')
    <link href="{{ asset('assets/admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
  @else
    <link href="{{ asset('assets/admin/css/sb-admin-2-rtl.css') }}" rel="stylesheet">
  @endif

    <!-- Styles -->
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    {{ $css ?? ''}}

</head>
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

    <x-admin.layout.sidebar></x-admin.layout.sidebar>
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <x-admin.layout.header></x-admin.layout.header>
            <!-- Begin Page Content -->
            <div class="container-fluid">

                {{ $slot }}

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <x-admin.layout.footer></x-admin.layout.footer>

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('main.ready_to_leave') }}</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <form action="{{ route('dashboard.logout') }}" id="logoutFormAdmin" method="post"></form>
                <button class="btn btn-secondary"  type="button" data-dismiss="modal">{{ __('main.cancel') }}</button>
                <button class="btn btn-danger" type="submit" form="logoutFormAdmin">{{ __('main.logout') }}</button>
            </div>
        </div>
    </div>
</div>
@stack('modal')

<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('assets/admin/js/jquery.easing.min.js') }}"></script>
<script src="https://cdn.tiny.cloud/1/drz4nje8yrhrsjasgnw48sqn01hm0e3bq64chmfr3t3lh75i/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="{{asset('assets/admin/js/editor-config.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('assets/admin/js/sb-admin-2.min.js') }}"></script>
<script>

    function imagePreview(imgId, img) {
        const [file] = img.files
        if (file) {
            document.getElementById(imgId).src = URL.createObjectURL(file)
        }
    }
</script>

@include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
{{ $js ?? ''}}
{{ $modal ?? '' }}
</body>
</html>
