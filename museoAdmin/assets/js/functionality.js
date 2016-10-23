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
