var base_url;

function goTipoDispositivo(ruta, ELEid, ELEdescription){
	base_url=ruta;
	$.ajax({
        url: base_url+'index.php/admin/tipoDispositivo',
        type: 'POST',
        data: 'ELEid='+ELEid+'&ELEdescription='+ELEdescription,
        success:function(respuesta){
        	alertify.success('SE FUEEE...');
        },error: function(respuesta){
            // alertify.error('Lo sentimos, no se pueden cargar los datos.');
        }
    });
}