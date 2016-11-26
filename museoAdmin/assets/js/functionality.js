var base_url;
var msjeAlerta;

//Función para inhabilitar el botón atrás. 
function nobackbutton(base_url){ 
  window.location.hash="no-back-button";
  window.location.hash="Again-No-back-button" //chrome
  window.onhashchange=function(){window.location.hash="no-back-button";}
  // if(window.history == base_url+"index.php/admin/tipoDispositivo"){
  //   window.location.href=base_url+'index.php/admin';
  // }
}

function verificarPaginas(base_url){
  if(window.history == base_url+"index.php/admin/tipoDispositivo"){
    window.location.href=base_url+'index.php/admin';
  }
}

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
    var tipoZona = $('#cboTipoZona').val();
    var sala = $('#cboSala').val();
    var descripcion = $('#txtDescripcion').val();
    $.ajax({
        url: base_url+'index.php/admin/registrarDispositivo',
        type: 'POST',
        data: 'id='+id+'&sala='+sala+'&tipoZona='+tipoZona+'&descripcion='+descripcion,
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
    funcion='alertaEliminarMultimedia('+id+')';
    // La función modalAlerta ejecuta un cuadro de alerta para confirmar antes de hacer algo. 
    // Se le pasa el mensaje que mostrará y la función que ejecutará al confirmar el modal.
    modalAlerta(msjeAlerta, funcion);
  }

  function alertaEliminarMultimedia(id){
    $('#modalConfirmacion').modal('hide');
    $.ajax({
        url: base_url+'index.php/admin/verificarMultimedia',
        type: 'POST',
        data: 'id='+id,
        success:function(respuesta){
            try{
              if(parseInt(respuesta)>0){
                msjeAlerta='<small>Al eliminar la zona seleccionada, se eliminarán irreversiblemente todos los archivos multimedia (audio, video e imágenes) relacionados. <br> Si desea continuar haga clic en <b>ACEPTAR</b>, caso contrario, para proteger su información, haga clic en <b>CANCELAR</b>.</small>';
                funcion='eliminarZona('+id+')';
                modalAlerta2(msjeAlerta, funcion);
              }else{
                eliminarZona(id);
              }
            }catch(e){
              alertify.error('Lo sentimos, no se puede eliminar la zona seleccionada.');
            }
        },error: function(respuesta){
            alertify.error('Lo sentimos, no se puede eliminar la zona seleccionada.');
        }
    });
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

  function traerDatosDispositivo(id, descripcion, sala, tipoZona, state){
    $('#textIdZonaEdit').text(id);
    $('#txtIdZonaEdit').val(id);
    $('#txtDescripcionEdit').val(descripcion);
    $("#cboTipoZonaEdit > option[value="+tipoZona+"]").attr("selected", true); 
    $("#cboSalaEdit > option[value="+sala+"]").attr("selected", true);
    if(state=='Activo'){
      $('#rbEstadoA').prop( "checked", true);
      $('#rbEstadoI').prop( "checked", false);
    }else{
      $('#rbEstadoA').prop( "checked", false);
      $('#rbEstadoI').prop( "checked", true);
    }
    abrirModal('modalEditarDispositivo');
  }

  function editarZona(ruta){
    base_url=ruta;
    var id = $('#txtIdZonaEdit').val();
    var descripcion = $('#txtDescripcionEdit').val();
    var tipoZona = $('#cboTipoZonaEdit').val();
    var sala = $('#cboSalaEdit').val();
    var estado = $('input:radio[name=rbEstadoEdit]:checked').val();
    $.ajax({
        url: base_url+'index.php/admin/editarDispositivo',
        type: 'POST',
        data: 'id='+id+'&descripcion='+descripcion+'&tipoZona='+tipoZona+'&sala='+sala+'&estado='+estado,
        success:function(respuesta){
          alertify.success('Datos actualizados satisfactoriamente');
          location.reload();
        },error: function(respuesta){
          alertify.error('Lo sentimos, los datos no pueden ser actualizados.');
        }
    });
  }

  function registrarPanel(ruta, ZONid){
    base_url=ruta;
    $.ajax({
        url: base_url+'index.php/admin/registrarPanel',
        type: 'POST',
        data: 'ZONid='+ZONid,
        success:function(respuesta){
          $('#PANid').val(respuesta);
          alertify.success('Nuevo panel registrado');
          document.forms['frmRegistroPanel'].submit();
        },error: function(respuesta){
          alertify.error('No se puede registrar un nuevo panel en la zona indicada.');
        }
    });
  }


  function seleccionarIdioma(ruta){
    base_url=ruta;
    var idioma = $('#cboIdioma option:selected').html();
    var LANid = $('#cboIdioma').val();
    $('#idiomaSeleccionadoTittle').text(idioma);
    // getPanelByLanguage(LANid);
  }

  function getPanelByLanguage(LANid){
    var zone = $('#txtZONid').val();
    var panel = $('#txtPANid').val();
    $.ajax({
        url: base_url+'index.php/admin/getPanelByLanguage',
        type: 'POST',
        data: 'LANid='+LANid+'&zone='+zone+'&panel='+panel,
        dataType: 'json',
        success:function(respuesta){
          // alertify.success('Datos actualizados satisfactoriamente');
          // location.reload();
          $.each(respuesta, function(key){
              titulo = respuesta[key].titulo;
              subtitulo = respuesta[key].subtitulo;
              descripcion = respuesta[key].descripcion;
          });
          $('#txtTitulo').val(titulo);
          $('#txtSubtitulo').val(subtitulo);
          $('#txtDescripcion').val(descripcion);
        },error: function(respuesta){
          alertify.error('Lo sentimos, los datos no pueden ser actualizados.');
        }
    });
  }

  function guardarDetallePanel(ruta, ZONid, PANid){
    base_url=ruta;
    LANid = $('#cboIdioma').val();
    titulo = $('#txtTitulo').val();
    subtitulo = $('#txtSubtitulo').val();
    contenido = $('#txtDescripcion').val();
    $.ajax({
        url: base_url+'index.php/admin/registrarDetallePanel',
        type: 'POST',
        data: 'ZONid='+ZONid+'&PANid='+PANid+'&LANid='+LANid+'&titulo='+titulo+'&subtitulo='+subtitulo+'&contenido='+contenido,
        success:function(respuesta){
          alertify.success('Información de panel registrada satisfactoriamente');
        },error: function(respuesta){
          alertify.error('Hubo un error al grabar los datos');
        }
    });
  }





// MODALES

  function modalAlerta(msje, funcion){
    $('#modalAlertaMensaje').text(msje);
    document.getElementById('btnAceptarModalAlerta').setAttribute("onClick", funcion);
    abrirModal('modalConfirmacion');
  }

  function modalAlerta2(msje, funcion){
    $('#modalAlerta2Mensaje').html(msje);
    document.getElementById('btnAceptarModalAlerta2').setAttribute("onClick", funcion);
    abrirModal('modalConfirmacion2');   //ES LA CONFIRMACION3
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

  // function confirmacionEliminar3(ruta){
  //   base_url=ruta;
  //   abrirModal('modalConfirmacion3');
  // }


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