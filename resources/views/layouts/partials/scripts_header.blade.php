<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>@yield('titulo')</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		{{-- window.Laravel = {!! json_encode(['csrfToken' => csrf_token(),]) !!}; --}}
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
		<!--end::Web font -->

		@auth
			<!--begin:: Global Mandatory Vendors -->
			<link href="plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

			<!--begin:: Global Optional Vendors -->
			<link href="plugins/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
			<link href="plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
			<link href="plugins/bootstrap-datetime-picker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
			<link href="plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
			<link href="plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
			<link href="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
			<link href="plugins/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
			<link href="plugins/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
			<link href="plugins/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
			<link href="plugins/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
			<link href="plugins/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
			<link href="plugins/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
			<link href="plugins/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
			<link href="plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" type="text/css" />
			<link href="plugins/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
			<link href="plugins/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
			<link href="plugins/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
			<link href="plugins/animate.css/animate.css" rel="stylesheet" type="text/css" />
			<link href="plugins/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
			<link href="plugins/jstree/dist/themes/default/style.css" rel="stylesheet" type="text/css" />
			<link href="plugins/morris.js/morris.css" rel="stylesheet" type="text/css" />
			<link href="plugins/chartist/dist/chartist.min.css" rel="stylesheet" type="text/css" />
			<link href="plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css" />
			<link href="plugins/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
			<link href="plugins/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
			<link href="plugins/vendors/flaticon/css/flaticon.css" rel="stylesheet" type="text/css" />
			<link href="plugins/vendors/metronic/css/styles.css" rel="stylesheet" type="text/css" />
			<link href="plugins/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />
			<!--end:: Global Optional Vendors -->
		@endauth

		<!--begin::Global Theme Styles -->
		<link href="{{ asset('/assets/demo/base/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->
		<link rel="shortcut icon" href="assets/demo/media/img/logo/favicon.ico" />
	</head>
<!-- end::Head -->
