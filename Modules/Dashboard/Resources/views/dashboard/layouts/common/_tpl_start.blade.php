<html lang="en" dir="rtl" style="direction: rtl">
    <!--begin::Head-->
	<head><base href="">
		<title>@yield('pageTitle')</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="{{-- url('logo1.png') --}}" />
		<!--begin::Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Cairo:300,400&amp;subset=arabic,latin-ext" rel="stylesheet">
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{asset('assets/dashboard/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/dashboard/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('assets/dashboard/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/dashboard/plugins/custom/prismjs/prismjs.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.6.0/dt-1.11.3/datatables.min.js"></script>
		<!--end::Global Stylesheets Bundle-->
        <style>
            html, body, a, i, p, h1, h2, h3, h4, h5, h6, table, .btn, .alert, .dt-button {
                font-family: 'Cairo', sans-serif;
            }
            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                color: #fff !important;
                border: 1px solid #979797;
                background-color: white;
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #2d3748));
                background: -webkit-linear-gradient(top, #fff 0%, #2d3748 100%);
                background: -moz-linear-gradient(top, #fff 0%, #2d3748 100%);
                background: -ms-linear-gradient(top, #fff 0%, #2d3748 100%);
                background: -o-linear-gradient(top, #fff 0%, #2d3748 100%);
                background: linear-gradient(to bottom, #2d3748 0%, #f1f3f6 100%);
                border-radius: 35px;
            }
            .dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
                color: #333 !important;
                border: 1px solid #979797;
                background-color: white;
                background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
                background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                background: linear-gradient(to bottom, #9b8fb4 0%, #f1f3f6 100%);
                border-radius: 35px;
            }
        </style>
	</head>
	<!--end::Head-->

    <!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed toolbar-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
