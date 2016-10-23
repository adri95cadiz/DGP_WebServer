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
}

function verPaneles(ZONid){
	document.forms['form-'+ELEid].submit();
}

function verEventos(ZONid){
	document.forms['form-'+ELEid].submit();
}