var base_url;
var msjeAlerta;

//Función para inhabilitar el botón atrás. 
function nobackbutton(ruta){ 
  base_url=ruta;
  window.location.hash="no-back-button";
  window.location.hash="Again-No-back-button" //chrome
  window.onhashchange=function(){window.location.hash="no-back-button";}
  var registroDetallePanelFound = window.location.pathname.search('registroDetallePanel');
  if(registroDetallePanelFound>=0){
    seleccionarIdioma(base_url);
  }
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
          $('#PANidForm').val(respuesta);
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
    if (LANid!='undefined') {
      $('#idiomaSeleccionadoTittle').text(idioma);
      getPanelByLanguage(LANid);
      getMultimediaByLanguage(LANid);
    }
  }

  function getPanelByLanguage(idioma){
    var zona = $('#txtZONid').val();
    var panel = $('#txtPANid').val();
    $.ajax({
        url: base_url+'index.php/admin/getPanelByLanguage',
        type: 'POST',
        data: 'idioma='+idioma+'&zona='+zona+'&panel='+panel,
        dataType: 'json',
        success:function(respuesta){
          // alertify.success('Datos actualizados satisfactoriamente');
          // location.reload();
          $.each(respuesta, function(key){
              flag = respuesta[key].PANid;
              if(flag!='0'){
                titulo = respuesta[key].PDEtitle;
                subtitulo = respuesta[key].PDEsubTitle;
                descripcion = respuesta[key].PDEcontent;
                $('#txtTitulo').val(titulo);
                $('#txtSubtitulo').val(subtitulo);
                $('#txtDescripcion').val(descripcion);
              }
          });
        },error: function(respuesta){
          // alertify.error('Lo sentimos, los datos no pueden ser actualizados.');
        }
    });
  }

  function getMultimediaByLanguage(idioma){
    var zona = $('#txtZONid').val();
    var panel = $('#txtPANid').val();
    $.ajax({
        url: base_url+'index.php/admin/getMultimediaByLanguage',
        type: 'POST',
        data: 'idioma='+idioma+'&zona='+zona+'&panel='+panel,
        dataType: 'json',
        success:function(respuesta){
          $.each(respuesta, function(key){
              zona = respuesta[key].ZONid;
              panel = respuesta[key].PANid;
              idioma = respuesta[key].LANid;
              id = respuesta[key].MULid;
              descripcion = respuesta[key].MULdescription;
              order = respuesta[key].MULorder;
              ruta = respuesta[key].MULrute;
              state = respuesta[key].MULstate;
              features = respuesta[key].features;
              var tabla='tblMultimediaFiles';
              var trs=$("#"+tabla+" tr").length;
              var nuevaFila='<tr>';
              nuevaFila=nuevaFila+'<td>'+order+'</td> <td>'+descripcion+'</td><td>'+features+'</td>';
              nuevaFila=nuevaFila+'<td> <button type="button" class="btn btn-primary btn-circle" onClick="downloadFile(\'<?php echo base_url(); ?>\', \''+descripcion+'\', \''+ruta+'\')"><i class="fa fa-download"></i></button> </td>';
              nuevaFila=nuevaFila+'<td> <button type="button" class="btn btn-danger btn-circle" onClick="confEliminarFile(\'<?php echo base_url(); ?>\', \''+zona+'\', \''+panel+'\', \''+idioma+'\', \''+id+'\')"><i class="fa fa-times"></i></button> </td>';
              nuevaFila=nuevaFila+'</tr>';
              addRow(tabla, nuevaFila);
          });
        },error: function(respuesta){
          alertify.error('Lo sentimos, los datos no pueden ser actualizados.');
        }
    });
  }

  function downloadFile(ruta, fileName, filePath){
    $.ajax({
        url: base_url+'index.php/admin/downloadFile',
        type: 'POST',
        data: 'fileName='+fileName+'&filePath='+filePath,
        success:function(respuesta){
          alertify.success('Archivo descargado satisfactoriamente.');
        },error: function(respuesta){
          alertify.error('Archivo no disponible para su descarga.');
        }
    });
  }

  function confEliminarFile(ruta, zona, panel, idioma, id){
    base_url=ruta;
    msjeAlerta='Si elimina este archivo no podrá recuperarlo <br> ¿Está seguro que desea eliminar el archivo seleccionado?';
    funcion="eliminarFile('"+zona+"', '"+panel+"', '"+idioma+"', '"+id+"')";
    // La función modalAlerta ejecuta un cuadro de alerta para confirmar antes de hacer algo. 
    // Se le pasa el mensaje que mostrará y la función que ejecutará al confirmar el modal.
    modalAlerta(msjeAlerta, funcion);
  }

  function eliminarFile(zona, panel, idioma, id){
    $.ajax({
        url: base_url+'index.php/admin/eliminarFile',
        type: 'POST',
        data: 'zona='+zona+'&panel='+panel+'&idioma='+idioma+'&id='+id,
        success:function(respuesta){
          alertify.success('Archivo eliminado satisfactoriamente.');
        },error: function(respuesta){
          alertify.error('Este archivo no puede ser eliminado.');
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

  function guardarArchivo(ruta){
    base_url=ruta;
    var zona = $('#txtZONid').val();
    var panel = $('#txtPANid').val();
    var idioma = $('#cboIdioma').val();
    var necesidades = getNecesidadesSeleccionadas();
    if(necesidades.length>0){
      ajaxSaveFile(zona, panel, idioma, necesidades);
    }else{
      alertify.error('Debe indicar para que tipo de necesidades especiales estará disponible el archivo multimedia');
    }
  }

  function getNecesidadesSeleccionadas(){
    var necesidadesChecked = new Array();
    $("input:checkbox:checked").each(function(){
        necesidadesChecked.push($(this).val());
    });
    return necesidadesChecked;
  }

  function ajaxSaveFile(zona, panel, idioma, necesidades){
    var inputFile = $('input[name=fileMultimedia]');
    var uploadURI = base_url+'index.php/admin/uploadMultimedia';

    var fileToUpload = inputFile[0].files[0];
    // make sure there is file to upload
    if (fileToUpload != 'undefined') {
      // provide the form data
      // that would be sent to sever through ajax
      var formData = new FormData();
      formData.append("file", fileToUpload);
      formData.append("zona", zona);
      formData.append("panel", panel);
      formData.append("idioma", idioma);
      // now upload the file using $.ajax
      $.ajax({
        url: uploadURI,
        type: 'post',
        data: formData,
        processData: false,
        dataType    : 'json',
        contentType: false,
        success: function(data,status) {
          if(status != 'error'){
            alertify.success('Archivo guardado satisfactoriamente');
            var id=data['msg'];
            asignarNecEspeciales(id, necesidades);
          }else{
            alertify.error(data['msg']);
          }
        },error: function(data,status){
          alertify.error(data['msg']);
        }
      });
    }
  }

  function asignarNecEspeciales(id, necesidades){
    for(i=0; i<necesidades.length; i++){
      setVisibility(id, necesidades[i]);
    }
  }

  function setVisibility(id, necesidad){
    var zona = $('#txtZONid').val();
    var panel = $('#txtPANid').val();
    var idioma = $('#cboIdioma').val();
    $.ajax({
        url: base_url+'index.php/admin/setVisibility',
        type: 'POST',
        data: 'zona='+zona+'&panel='+panel+'&idioma='+idioma+'&MULid='+id+'&necesidad='+necesidad,
        success:function(respuesta){
          alertify.success('Información de panel registrada satisfactoriamente');
        },error: function(respuesta){
          alertify.error('Hubo un error al grabar los datos');
        }
    });
  }





  function addRow(tabla, fila){
    $("#"+tabla).append(fila);
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