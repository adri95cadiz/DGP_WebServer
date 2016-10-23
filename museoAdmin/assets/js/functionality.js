var base_url;
function openDisability(ruta){
	base_url=ruta;
	abrirModal('modalDisability')
}

function abrirModal (idModal) {
	$('#'+idModal).modal({
  		show:true,
  		backdrop:'static',
  	}); 
}


function goTipoDispositivo(ELEid){
	document.forms['form-'+ELEid].submit();
	// $.ajax({
 //        url: base_url+'index.php/admin/tipoDispositivo',
 //        type: 'POST',
 //        data: 'ELEid='+ELEid+'&ELEdescription='+ELEdescription,
 //        success:function(respuesta){
 //        	alertify.success('REDIRECCIONANDO');
 //        },error: function(respuesta){
 //            alertify.error('Lo sentimos, no se pueden cargar los datos.');
 //        }
 //    });
}

