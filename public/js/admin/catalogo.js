var Catalogo = (function (w) {

	var tableOpt = {
		"language": {
            "lengthMenu": "Mostrar _MENU_",
            "zeroRecords": "No hubo coincidencias",
            "info": "Mostrando pagina _PAGE_ de _PAGES_",
            "infoEmpty": "",
            "infoFiltered": "",
            "search": "Buscar:",
            "paginate": {
            	last: "Ultimo",
            	previous: "Anterior",
            	next: "Siguiente",
            	first: "Primero"
            }
        },       
        "fnDrawCallback": function() {
			$('#tabla-result_length').hide();//entradas por tabla

            if ( $('.dataTables_paginate a').size() < 4) 
            {
            	$('.dataTables_paginate').hide();
            }
        },
        info: false
	};

	var deleter = function (target, href) {
		$(target).click(function(e)
		{
			e.preventDefault();
			if(confirm("¿Esta seguro de que desea borrar este elemento?"))
			{
				window.location.replace(help.baseUrl + href + $(this).attr('href'));
			}
		});
	};
	
	return {
		tableOpt: tableOpt,
		deleter: deleter
	};
})(window);