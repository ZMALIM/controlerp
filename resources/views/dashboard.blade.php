@extends('layouts.app')

@section('titulo','LEONEL')

@section('content')
	{{-- <example-component></example-component> --}}
	<div class="m-portlet m-portlet--brand m-portlet--head-solid-bg m-portlet--bordered">
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<span class="m-portlet__head-icon">
						<i class="flaticon-cogwheel-2"></i>
					</span>
					<h3 class="m-portlet__head-text">
						{{-- {{dd(Auth::user()->mensajes)}} --}}
						{{-- {{App\Models\Mensaje::with('usuario')->get()}} --}}
						{{Auth::user()->idusuario}}
						aqui el nuevo cambio 
					</h3>
				</div>
			</div>
			<div class="m-portlet__head-tools">
				<div class="m-btn-group m-btn-group--pill btn-group mr-2" role="group" aria-label="...">
					<button type="button" class="m-btn btn btn-outline-light"><i class="la la-file-text-o"></i></button>
					<button type="button" class="m-btn btn btn-outline-light"><i class="la la-bold"></i></button>
					<button type="button" class="m-btn btn btn-outline-light"><i class="la la-paperclip"></i></button>
				</div>
			</div>
		</div>
		<div class="m-portlet__body">
			<div class="">
				{{Auth::user()->personal->contacto->razon_social}}
				{{$leo}}
				{{count($ubigeos["ubigeo"])}}
				{{-- @foreach ($ubigeos["ubigeo"] as $ubigeo)
					<pre>{{$ubigeo["Departamento"]}}</pre>
				@endforeach --}}
				<div class="m-portlet__body">
					<!--begin: Search Form -->
					<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
						<div class="row align-items-center">
							<div class="col-xl-8 order-2 order-xl-1">
								<div class="form-group m-form__group row align-items-center">
									<div class="col-md-4">
										<div class="m-input-icon m-input-icon--left">
											<input type="text" class="form-control m-input m-input--pill" placeholder="Busqueda" id="Busqueda">
											<span class="m-input-icon__icon m-input-icon__icon--left">
												<span><i class="la la-search"></i></span>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 order-1 order-xl-2 m--align-right">
								<a href="#" class="btn btn-warning m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air">
									<span>
										<i class="la la-cart-plus"></i>
										<span>New Order</span>
									</span>
								</a>
								<div class="m-separator m-separator--dashed d-xl-none"></div>
							</div>
						</div>
					</div>

					<!--end: Search Form -->

					<div class="m_datatable" id="tabla_ubigeo"></div>
				</div>

			</div>
		</div>
	</div>
@endsection
