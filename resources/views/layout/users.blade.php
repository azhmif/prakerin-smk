<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('judul')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon.ico') }}">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.transitions.css') }}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/meanmenu.min.css') }}">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/educate-custon-icon.css') }}">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/calendar/fullcalendar.print.min.css') }}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/data-table/bootstrap-table.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/data-table/bootstrap-editable.css') }}">
    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/modals.css') }}">
    <!-- forms CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/form/all-type-forms.css') }}">
    <!-- summernote CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/summernote/summernote.css') }}">

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{ URL::asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

    @yield('content')

    
    <!-- jquery
		============================================ -->
    <script src="{{ URL::asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- wow JS
		============================================ -->
    <script src="{{ URL::asset('js/wow.min.js') }}"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="{{ URL::asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- counterup JS
		============================================ -->
    <script src="{{ URL::asset('js/counterup/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('js/counterup/waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('js/counterup/counterup-active.js') }}"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="{{ URL::asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ URL::asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="{{ URL::asset('js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ URL::asset('js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ URL::asset('js/morrisjs/raphael-min.js') }}"></script>
    <script src="{{ URL::asset('js/morrisjs/morris.js') }}"></script>
    <script src="{{ URL::asset('js/morrisjs/morris-active.js') }}"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="{{ URL::asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ URL::asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <script src="{{ URL::asset('js/sparkline/sparkline-active.js') }}"></script>
    <!-- calendar JS
		============================================ -->
    <script src="{{ URL::asset('js/calendar/moment.min.js') }}"></script>
    <script src="{{ URL::asset('js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ URL::asset('js/calendar/fullcalendar-active.js') }}"></script>
    <!-- plugins JS
		============================================ -->
    <script src="{{ URL::asset('js/plugins.js') }}"></script>
    <!-- summernote JS
    ============================================ -->
    <script src="{{ URL::asset('js/summernote/summernote.min.js') }}"></script>
    <script src="{{ URL::asset('js/summernote/summernote-active.js') }}"></script>
    
    <!-- data table JS
		============================================ -->
    <script src="{{ URL::asset('js/data-table/bootstrap-table.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/tableExport.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/data-table-active.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-table-editable.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-editable.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-table-resizable.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/colResizable-1.5.source.js') }}"></script>
    <script src="{{ URL::asset('js/data-table/bootstrap-table-export.js') }}"></script>
    <!-- main JS
		============================================ -->
    <script src="{{ URL::asset('js/main.js') }}"></script>
</body>

</html>