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

  function registrarZona(ruta){
    base_url=ruta;
    var id = $('#txtIdZona').val();
    var tipoDispositivo = $('#cboTipoZona').val();
    var sala = $('#cboSala').val();
    var descripcion = $('#txtDescripcion').val();
    $.ajax({
        url: base_url+'index.php/admin/registrarDispositivo',
        type: 'POST',
        data: 'id='+id+'&sala='+sala+'&tipoDispositivo='+tipoDispositivo+'&descripcion='+descripcion,
        success:function(respuesta){
          alertify.success('Nueva zona registrada');
          location.reload();
        },error: function(respuesta){
            alertify.error('Lo sentimos, no se pueden registrar los datos.');
        }
    });
  }

  function confEliminarZona(ruta, id){
    base_url=ruta;
    msjeAlerta='¿Está seguro que desea eliminar la zona seleccionada?';
    funcion='eliminarZona('+id+')';
    // La función modalAlerta ejecuta un cuadro de alerta para confirmar antes de hacer algo. 
    // Se le pasa el mensaje que mostrará y la función que ejecutará al confirmar el modal.
    modalAlerta(msjeAlerta, funcion);
  }

  function eliminarZona(id){
    $.ajax({
        url: base_url+'index.php/admin/eliminarDispositivo',
        type: 'POST',
        data: 'id='+id,
        success:function(respuesta){
          alertify.success('Zona eliminada');
          location.reload();
        },error: function(respuesta){
            alertify.error('Lo sentimos, no se puede eliminar la zona seleccionada.');
        }
    });
  }  


  //TIPO DE ZONAS

  function editarTipoZona(id,descripcion,estado){ //serían las blancas
    $.ajax({
        url: base_url+'index.php/admin/editarTipoZona', //Nombre del controlador
        type: 'POST',
        /*con & se concatenan variables*/
        data: 'id='+id + '&descripcion=' + descripcion + '&estado=' + estado, //id, descripción, estado
        success:function(respuesta){
          alertify.success('Tipo de zona editada');
          location.reload();
        },error: function(respuesta){
            alertify.error('Lo sentimos, no se puede editar el tipo de zona seleccionada.');
        }
    });
  }  



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

  // function confirmacionEliminar2(ruta){
  //   base_url=ruta;
  //   abrirModal('modalConfirmacion2');
  // }

  function confirmacionEliminar3(ruta){
    base_url=ruta;
    abrirModal('modalConfirmacion3');
  }

  function editarDispositivo(ruta){
    base_url=ruta;
    abrirModal('modalEditarDispositivo');
  }

  function editarZona(ruta){
    base_url=ruta;
    abrirModal('modalEditarZona'); //Nombre del id del modal
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