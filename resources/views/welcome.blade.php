<html lang="en" class="h-100" dir="ltr">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="description" content="PorkBusket">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta property="og:title" content="PorkBusket">
	<meta property="og:description" content="PorkBusket">
	<meta property="og:image" content="https://davur.dexignzone.com/xhtml/page-error-404.html">
	<meta name="format-detection" content="telephone=no">
    <title>The Pork Busket - "Nairobi's Newest Gem, The Pork Basket Eatery offers a contemporary dining experience for everyone.</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="/front_end_assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="/back_end_assets/icons/icofont/icofont.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="/back_end_assets/images/favicon.png">
    <link href="/back_end_assets/vendor/jqvmap/css/jqvmap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/back_end_assets/vendor/chartist/css/chartist.min.css">
	<link href="/back_end_assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/back_end_assets/css/style.css" rel="stylesheet">
    <link href="/back_end_assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body class="h-100" data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sibebarbg="color_1" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_1">
    @if (Auth::guard('admin')->check())
    <script>
        console.log(window.Laravel);
        window.Laravel = {!! json_encode([
                        'isLoggedIn' => true,
                        'type' => 1
                    ]) !!}
    </script>
    @else
    <script>
        window.Laravel = {!! json_encode([
                        'isLoggedIn' => false,
                    ]) !!}
    </script>
    @endif
    <main id="app">
    </main>
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/front_end_assets/vendor/global/global.min.js"></script>
	<script src="/front_end_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/front_end_assets/js/custom.min.js"></script>
    <script src="/front_end_assets/js/deznav-init.js"></script>
    <script src="/back_end_assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    {{-- <script src="./js/plugins-init/datatables.init.js"></script> --}}
    <script src="/js/app.js"></script>
</body>
</html>