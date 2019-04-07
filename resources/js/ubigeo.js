//== Class definition

var DefaultDatatableDemo = function () {
	//== Private functions

	// basic demo
	var demo = function () {
		var datatable = $('#tabla_ubigeo').mDatatable({
			data: {
				type: 'remote',
				source: {
                    read: {
                        method: "get",
                        url: 'ubigeo'
					}
				},
				pageSize: 20,
				serverPaging: true,
				serverFiltering: false,
				serverSorting: true
			},

			layout: {
                header: true,
				theme: 'default',
				class: '',
				scroll: true,
				height: 550,
				footer: false,

				spinner: {
					overlayColor: '#000000',
					opacity: 0,
					type: 'loader',
					state: 'brand',
					message: true
				},

				icons: {
					sort: {asc: 'la la-arrow-up', desc: 'la la-arrow-down'},
					pagination: {
						next: 'la la-arrow-right',
						prev: 'la la-arrow-left',
						first: 'la la-angle-double-left',
						last: 'la la-angle-double-right',
						more: 'la la-ellipsis-h'
					},
					rowDetail: {expand: 'fa fa-caret-down', collapse: 'fa fa-caret-right'}
				}
			},

			sortable: false,
			filterable: false,
			pagination: true,

			search: {
				input: $('#Busqueda')
			},

			columns: [{
				field: "idubigeo",
				title: "#",
				sortable: false,
				width: 40,
				selector: {class: 'm-checkbox--solid m-checkbox--brand'}
            },{
				field: "departamento",
				title: "Departamento",
				sortable: 'asc',
				filterable: false,
				width: 150,
				template: '{{idubigeo}} - {{departamento}}'
			},{
				field: "provincia",
                title: "Provincia",
                filterable: false,
                responsive: {visible: 'lg'}
                
			}, {
				field: "distrito",
                title: "Distrito",
                width: 250,
                filterable: false,
				responsive: {visible: 'lg'}
			}, {
				field: "codigo_pais",
                title: "Cod. Pais",
				width: 100,
				responsive: {visible: 'lg'}
			},{
				field: "Acciones",
				width: 110,
				title: "Acciones",
				sortable: false,
				locked: {right: 'xl'},
				overflow: 'visible',
				template: function (row, index, datatable) {
					var dropup = (datatable.getPageSize() - index) <= 4 ? 'dropup' : '';
					return '\
						<div class="dropdown '+ dropup +'">\
							<a href="#" class="btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" data-toggle="dropdown">\
                                <i class="la la-ellipsis-h"></i>\
                            </a>\
						  	<div class="dropdown-menu dropdown-menu-right">\
						    	<a class="dropdown-item" href="#"><i class="la la-edit"></i> Edit Details</a>\
						    	<a class="dropdown-item" href="#"><i class="la la-leaf"></i> Update Status</a>\
						    	<a class="dropdown-item" href="#"><i class="la la-print"></i> Generate Report</a>\
						  	</div>\
						</div>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-accent m-btn--icon m-btn--icon-only m-btn--pill" title="Edit details">\
							<i class="la la-edit"></i>\
						</a>\
						<a href="#" class="m-portlet__nav-link btn m-btn m-btn--hover-danger m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">\
							<i class="la la-trash"></i>\
						</a>\
					';
				}
			}],
			translate: {
				records: {
					processing: 'Cargando registros...',
					noRecords: 'Nohay registro que coincidan con lo que  estas buscando.'
				},
				toolbar: {
					pagination: {
						items: {
							default: {
								first: 'Primero',
								prev: 'Anterior',
								next: 'Siguiente',
								last: 'Último',
								more: 'Más páginas',
								input: 'Número de página',
								select: 'Seleccionar tamaño de página'
							},
							info: 'Viendo {{start}} - {{end}} de {{total}} registros.'
						}
					}
				}
			}
		});
	};

	return {
		// public functions
		init: function () {
			demo();
		}
	};
}();

jQuery(document).ready(function () {
    // axios.post('/ubigeo').then(response => {
    //     console.log(response.data);
    // });
	DefaultDatatableDemo.init();
});