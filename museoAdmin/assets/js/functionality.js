var base_url;
var msjeAlerta;

// NECESIDADES ESPECIALES
  function registrarNecesidad(ruta){
    base_url=ruta;
    var necesidad = $('#txtNecesidad').val();
    $.ajax({
        url: base_url+'index.php/admin/registrarNecesidad',
        type: 'POST',
        data: 'necesidad='+necesidad,
        success:function(respuesta){
          alertify.success('Necesidad especial registrada');
          location.reload();
        },error: function(respuesta){
            alertify.error('Lo sentimos, no se pueden cargar los datos.');
        }
    });
  }

  function confEliminarNecesidad(ruta, id){
    base_url=ruta;
    msjeAlerta='¿Está seguro que desea eliminar la necesidad especial seleccionada?';
    funcion='eliminarNecesidad('+id+')';
    // La función modalAlerta ejecuta un cuadro de alerta para confirmar antes de hacer algo. 
    // Se le pasa el mensaje que mostrará y la función que ejecutará al confirmar el modal.
    modalAlerta(msjeAlerta, funcion);
  }

  function eliminarNecesidad(id){
    $.ajax({
        url: base_url+'index.php/admin/eliminarNecesidad',
        type: 'POST',
        data: 'id='+id,
        success:function(respuesta){
          alertify.success('Necesidad especial eliminada');
          location.reload();
        },error: function(respuesta){
            alertify.error('Lo sentimos, no se puede eliminar la necesidad especial seleccionada.');
        }
    });
  }



// GESTIÓN DE CONTENIDOS




// MODALES

  function modalAlerta(msje, funcion){
    $('#modalAlertaMensaje').text(msje);
    document.getElementById('btnAceptarModalAlerta').setAttribute("onClick", funcion);
    abrirModal('modalConfirmacion');
  }


  function openDisability(ruta){
  	base_url=ruta;
  	abrirModal('modalDisability')
  }

  function confirmacionEliminar(ruta){
    base_url=ruta;
    abrirModal('modalConfirmacion');
  }

  function confirmacionEliminar2(ruta){
    base_url=ruta;
    abrirModal('modalConfirmacion2');
  }

  function confirmacionEliminar3(ruta){
    base_url=ruta;
    abrirModal('modalConfirmacion3');
  }

  function editarDispositivo(ruta){
    base_url=ruta;
    abrirModal('modalEditarDispositivo');
  }

  function abrirModal (idModal) {
  	$('#'+idModal).modal({
    		show:true,
    		backdrop:'static',
    	}); 
  }

//SUBMIT DE FORMULARIOS
  function goTipoDispositivo(ELEid){
  	document.forms['form-'+ELEid].submit();
  }

  function verPaneles(ZONid){
  	document.forms['form-'+ELEid].submit();
  }

  function verEventos(ZONid){
  	document.forms['form-'+ELEid].submit();
  }