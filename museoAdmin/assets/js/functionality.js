var base_url;
function openDisability(ruta){
	base_url=ruta;
	abrirModal('modalDisability')
}

function confirmacionEliminar(ruta){
  base_url=ruta;
  abrirModal('modalConfirmacion')
}
function confirmacionEliminar2(ruta){
  base_url=ruta;
  abrirModal('modalConfirmacion2')
}
function confirmacionEliminar3(ruta){
  base_url=ruta;
  abrirModal('modalConfirmacion3')
}

function editarDispositivo(ruta){
  base_url=ruta;
  abrirModal('modalEditarDispositivo')
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

