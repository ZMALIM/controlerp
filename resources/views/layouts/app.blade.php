<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	@section('scripts_header')
		@include('layouts.partials.scripts_header')
	@show
	<!-- begin::Body -->
	<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
		<div id="app" style="display:contents">
		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			@auth
				@include('layouts.partials.header');
				<!-- begin::Body -->
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
					<!-- BEGIN: Left Aside -->
					<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
					@include('layouts.partials.sidebar')
					<!-- END: Left Aside -->
					<div class="m-grid__item m-grid__item--fluid m-wrapper">
						<!-- BEGIN: Subheader -->
						<div class="m-subheader ">
							<div class="d-flex align-items-center">
								<div class="mr-auto">
									<h3 class="m-subheader__title ">Dashboard</h3>
								</div>
								<div>
									<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
										<span class="m-subheader__daterange-label">
											<span class="m-subheader__daterange-title"></span>
											<span class="m-subheader__daterange-date m--font-brand"></span>
										</span>
										<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
											<i class="la la-angle-down"></i>
										</a>
									</span>
								</div>
							</div>
						</div>
						<!-- END: Subheader -->
						<div class="m-content">
						@yield('content')
						</div>
					</div>
				</div>
				<!-- end:: Body -->
				<!-- begin::Footer -->
				@include('layouts.partials.footer')
				<!-- end::Footer -->
			@else
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url(../../../assets/app/media/img//bg/bg-1.jpg);">
					<div class="m-grid__item m-grid__item--fluid m-login__wrapper">
						<div class="m-login__container">

							<div class="m-login__logo">
								<a href="#">
									<img src="assets/app/media/img/logos/logo-1.png">
								</a>
							</div>
								@yield('content')
						</div>
					</div>
				</div>
			@endauth
		</div>
		<!-- end:: Page -->
		@auth
			@include('layouts.partials.sidebar_ld')
			@include('layouts.partials.scroll_nav')
		@endauth
	</div>
		@section('scripts_footer')
			@include('layouts.partials.scripts_footer')
		@show
	</body>
	<!-- end::Body -->
</html>
