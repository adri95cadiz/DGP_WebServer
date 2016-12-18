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
  var select2 = $('#cboIdioma');
  if(select2!='undefined'){
    $('#cboIdioma').select2();
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
    if(validarcampo('txtNecesidad','frmNecesidad','Necesidad Especial')){
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
  }

  function editarNecesidad(id, descripcion, state){ 
      abrirModal('modalEditarNecesidad');
      $('#txtEditId').val(id);
      $('#txtEditDescription').val(descripcion);
      if(state=='Activo'){
        $('#rbEditEstadoA').prop( "checked", true);
        $('#rbEditEstadoI').prop( "checked", false);
      }else{
        $('#rbEditEstadoA').prop( "checked", false);
        $('#rbEditEstadoI').prop( "checked", true);
      }
    }

    function ajaxEditarNecesidad(ruta){
      base_url=ruta;
      var id = $('#txtEditId').val();
      var descripcion = $('#txtEditDescription').val();
      var estado = $('input:radio[name=rbEditEstado]:checked').val();

      if(validarcampo('txtEditDescription','frmEditDescription','Necesidad Especial')){
        $.ajax({
            url: base_url+'index.php/admin/editarNecesidad', //Nombre del controlador
            type: 'POST',
            /*con & se concatenan variables*/
            data: 'id='+id + '&descripcion=' + descripcion + '&estado=' + estado, //id, descripción, estado
            success:function(respuesta){
              location.reload();
              alertify.success('Se ha actualizado los datos de la necesidad especial indicada.');
            },error: function(respuesta){
              alertify.error('No se ha logrado actualizar la necesidad especial indicada. Actualice la página y vuelva a intentarlo');
            }
        });
      }
     
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

    if(validarcampo('txtDescripcion','frmZona','Zona')){
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
                msjeAlerta='<small>Al eliminar la zona seleccionada, se eliminarán irreversiblemente todos los archivos multimedia (audio, video e imágenes) relacionados. <br> Si desea continuar haga clic en <b>ELIMINAR</b>, caso contrario, para proteger su información, haga clic en <b>CANCELAR</b>.</small>';
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

  function confEliminarPanel(ruta, zona, panel){
    base_url=ruta;
    msjeAlerta='¿Está seguro que desea eliminar el panel seleccionado?';
    //Primero se borrarán los datos de las tablas dependientes
    funcion='eliminarPanel('+zona+', '+panel+')';
    // La función modalAlerta ejecuta un cuadro de alerta para confirmar antes de hacer algo. 
    // Se le pasa el mensaje que mostrará y la función que ejecutará al confirmar el modal.
    modalAlerta(msjeAlerta, funcion);
  }

  function eliminarPanel(zona, panel){
    $('#modalConfirmacion').modal('hide');
    $.ajax({
        url: base_url+'index.php/admin/eliminarPanel',
        type: 'POST',
        data: 'zona='+zona+'&panel='+panel,
        success:function(respuesta){
            alertify.success('Panel eliminado satisfactoriamente.');
            location.reload();
        },error: function(respuesta){
            alertify.error('Lo sentimos, no se puede eliminar la zona seleccionada.');
        }
    });
  }

  function mostrarImagen(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
        $('#imagenPanel').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }

  function guardarImagen(ruta, zona, panel){
    base_url=ruta;
    var descripcion = $('#txtImgDescription').val();
    if(descripcion.length>0){
      ajaxSaveImagen(zona, panel, descripcion);
    }else{
      alertify.error('Debe registrar una descripción de la imagen mostrada');
    }
  }

  function ajaxSaveImagen(zona, panel, descripcion){
    var inputFile = $('input[name=fileImagen]');
    var uploadURI = base_url+'index.php/admin/uploadImagen';

    var fileToUpload = inputFile[0].files[0];
    // make sure there is file to upload
    if (fileToUpload != 'undefined') {
      // provide the form data
      // that would be sent to sever through ajax
      var formData = new FormData();
      formData.append("file", fileToUpload);
      formData.append("zona", zona);
      formData.append("panel", panel);
      formData.append("descripcion", descripcion);
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
            alertify.success(data['msg']);
          }else{
            alertify.error(data['msg']);
          }
        },error: function(data,status){
          alertify.error(data['msg']);
        }
      });
    }else{
      alertify.error('Debe seleccionar un archivo para registrar');
    }
  }
     



  //TIPO DE ZONAS

    function editarTipoZona(id, descripcion, state){ 
      abrirModal('modalEditarTipoZona');
      $('#txtEditId').val(id);
      $('#txtEditDescription').val(descripcion);
      if(state=='Activo'){
        $('#rbEditEstadoA').prop( "checked", true);
        $('#rbEditEstadoI').prop( "checked", false);
      }else{
        $('#rbEditEstadoA').prop( "checked", false);
        $('#rbEditEstadoI').prop( "checked", true);
      }
    }

    function ajaxEditarTipoZona(ruta){
      base_url=ruta;
      var id = $('#txtEditId').val();
      var descripcion = $('#txtEditDescription').val();
      var estado = $('input:radio[name=rbEditEstado]:checked').val();

      if(validarcampo('txtEditDescription','frmEditDescription','Tipo de Zona')){
        $.ajax({
            url: base_url+'index.php/admin/editarTipoZona', //Nombre del controlador
            type: 'POST',
            /*con & se concatenan variables*/
            data: 'id='+id + '&descripcion=' + descripcion + '&estado=' + estado, //id, descripción, estado
            success:function(respuesta){
              location.reload();
              alertify.success('Tipo de zona editada');
            },error: function(respuesta){
              alertify.error('No se ha logrado registrar el nuevo tipo de zona. Actualice la página y vuelva a intentarlo');
            }
        });
      }

      
    }

    function confEliminarTipoZona(ruta, id){
      base_url=ruta;
      msjeAlerta='<small>Al eliminar un tipo de zona, se eliminará también toda la información y archivos de imagen, audio o video relacionados a ese tipo de Zona. <br>¿Está seguro que desea continuar? </small>';
      funcion='confEliminarTipoZona2('+id+')';
      // La función modalAlerta ejecuta un cuadro de alerta para confirmar antes de hacer algo. 
      // Se le pasa el mensaje que mostrará y la función que ejecutará al confirmar el modal.
      modalAlerta(msjeAlerta, funcion);
    }

    function confEliminarTipoZona2(id){
      $('#modalConfirmacion').modal('hide');    
      msjeAlerta='<small>Recuerde que al eliminar la zona seleccionada, se eliminarán irreversiblemente todos los archivos multimedia (audio, video e imágenes) relacionados. <br> Solo si está seguro que desea eliminar el tipo de zona, haga clic en <b>ELIMINAR</b>, caso contrario, para proteger su información, haga clic en <b>CANCELAR</b>.</small>';
      funcion='eliminarTipoZona('+id+')';
      modalAlerta2(msjeAlerta, funcion);
    }

    function eliminarTipoZona(id){
      $.ajax({
          url: base_url+'index.php/admin/eliminarTipoZona', //Nombre del controlador
          type: 'POST',
          data: 'id='+id,
          success:function(respuesta){
            location.reload();
            alertify.success('Tipo de zona eliminada');
          },error: function(respuesta){
            alertify.error('No se puede eliminar el tipo de zona seleccionada.');
          }
      });
    }

  //SALAS

    function editarSala(id, descripcion, state){ 
      abrirModal('modalEditarSala');
      $('#txtEditId').val(id);
      $('#txtEditDescription').val(descripcion);
      if(state=='Activo'){
        $('#rbEditEstadoA').prop( "checked", true);
        $('#rbEditEstadoI').prop( "checked", false);
      }else{
        $('#rbEditEstadoA').prop( "checked", false);
        $('#rbEditEstadoI').prop( "checked", true);
      }
    }

    function ajaxEditarSala(ruta){
      base_url=ruta;
      var id = $('#txtEditId').val();
      var descripcion = $('#txtEditDescription').val();
      var estado = $('input:radio[name=rbEditEstado]:checked').val();

      if(validarcampo('txtEditDescription','frmEditDescription','Sala')){
        $.ajax({
            url: base_url+'index.php/admin/editarSala', //Nombre del controlador
            type: 'POST',
            /*con & se concatenan variables*/
            data: 'id='+id + '&descripcion=' + descripcion + '&estado=' + estado, //id, descripción, estado
            success:function(respuesta){
              location.reload();
              alertify.success('Tipo de zona editada');
            },error: function(respuesta){
              alertify.error('No se ha logrado registrar el nuevo tipo de zona. Actualice la página y vuelva a intentarlo');
            }
        });
      }

      
    }

    function confEliminarSala(ruta, id){
      base_url=ruta;
      msjeAlerta='<small>Al eliminar una sala o ambiente del museo, se eliminará también toda la información y archivos de imagen, audio o video relacionados a esta sala. <br>¿Está seguro que desea continuar? </small>';
      funcion='confEliminarSala2('+id+')';
      // La función modalAlerta ejecuta un cuadro de alerta para confirmar antes de hacer algo. 
      // Se le pasa el mensaje que mostrará y la función que ejecutará al confirmar el modal.
      modalAlerta(msjeAlerta, funcion);
    }

    function confEliminarSala2(id){
      $('#modalConfirmacion').modal('hide');    
      msjeAlerta='<small>Recuerde que al eliminar la sala seleccionada, se eliminarán irreversiblemente todos los archivos multimedia (audio, video e imágenes) relacionados. <br> Solo si está seguro que desea eliminar la sala, haga clic en <b>ELIMINAR</b>, caso contrario, para proteger su información, haga clic en <b>CANCELAR</b>.</small>';
      funcion='eliminarSala('+id+')';
      modalAlerta2(msjeAlerta, funcion);
    }

    function eliminarSala(id){
      $.ajax({
          url: base_url+'index.php/admin/eliminarSala', //Nombre del controlador
          type: 'POST',
          data: 'id='+id,
          success:function(respuesta){
            location.reload();
            alertify.success('Se ha eliminado la sala seleccionada.');
          },error: function(respuesta){
            alertify.error('No se puede eliminar la sala seleccionada.');
          }
      });
    }



  //IDIOMAS

  function confEliminarIdioma(ruta, id){
    base_url=ruta;
    msjeAlerta='Al desactivar este idioma, no se podrá visualizar ni modificar la información asociada a este.';
    funcion='eliminarIdioma('+id+')';
    // La función modalAlerta ejecuta un cuadro de alerta para confirmar antes de hacer algo. 
    // Se le pasa el mensaje que mostrará y la función que ejecutará al confirmar el modal.
    modalAlerta(msjeAlerta, funcion);
  }

  function eliminarIdioma(id){
    $.ajax({
        url: base_url+'index.php/admin/desactivarIdioma', //Nombre del controlador
        type: 'POST',
        /*con & se concatenan variables*/
        data: 'id='+id,
        success:function(respuesta){
          alertify.success('El idioma indicado ya no está disponible.');
          location.reload();
        },error: function(respuesta){
          alertify.error('No se puede desactivar el idioma seleccionado.');
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
              }else{
                $('#txtTitulo').val('');
                $('#txtSubtitulo').val('');
                $('#txtDescripcion').val('');
              }
          });
        },error: function(respuesta){
          $('#txtTitulo').val('');
          $('#txtSubtitulo').val('');
          $('#txtDescripcion').val('');
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
          var tabla='tblMultimediaFiles';
          var trs=$("#"+tabla+" tr").length;
          limpiarTabla(tabla);
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
              var nuevaFila='<tr>';
              nuevaFila=nuevaFila+'<td>'+order+'</td> <td>'+descripcion+'</td><td>'+features+'</td>';
              // nuevaFila=nuevaFila+'<td> <button type="button" class="btn btn-primary btn-circle" onClick="downloadFile(\'<?php echo base_url(); ?>\', \''+descripcion+'\', \''+ruta+'\')"><i class="fa fa-download"></i></button> </td>';
              nuevaFila=nuevaFila+'<td><form action="'+base_url+'index.php/admin/downloadFile" target="_blank" method="POST" role="form">';
              nuevaFila=nuevaFila+'<input type="text" name="txtDescripcionFile" value="'+descripcion+'" hidden>';
              nuevaFila=nuevaFila+'<input type="text" name="txtRutaFile" value="'+ruta+'" hidden>';
              nuevaFila=nuevaFila+'<button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-download"></i></button>';
              nuevaFila=nuevaFila+'</form></td>';
              nuevaFila=nuevaFila+'<td> <button type="button" class="btn btn-danger btn-circle" onClick="confEliminarArchivo(\''+base_url+'\', \''+zona+'\', \''+panel+'\', \''+idioma+'\', \''+id+'\')"><i class="fa fa-times"></i></button> </td>';
              nuevaFila=nuevaFila+'</tr>';
              addRow(tabla, nuevaFila);
          });
        },error: function(respuesta){
          alertify.error('Lo sentimos, los datos no pueden ser actualizados.');
        }
    });
  }

  function limpiarTabla(tabla){
    tabla=document.getElementById(tabla).tBodies[0];
    tabla.innerHTML="";
  }

  function downloadFile(ruta, fileName, filePath){
    window.open('http://ejemplo.com/archivo.pdf', '_blank');
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

  function confEliminarArchivo(ruta, zona, panel, idioma, id){
    base_url=ruta;
    msjeAlerta='<small>Si elimina este archivo no podrá recuperarlo <br> ¿Está seguro que desea eliminar el archivo seleccionado? </small>';
    funcion="eliminarArchivo('"+zona+"', '"+panel+"', '"+idioma+"', '"+id+"')";
    // La función modalAlerta ejecuta un cuadro de alerta para confirmar antes de hacer algo. 
    // Se le pasa el mensaje que mostrará y la función que ejecutará al confirmar el modal.
    modalAlerta(msjeAlerta, funcion);
  }

  function eliminarArchivo(zona, panel, idioma, id){
    $('#modalConfirmacion').modal('hide');
    $.ajax({
        url: base_url+'index.php/admin/eliminarArchivo',
        type: 'POST',
        data: 'zona='+zona+'&panel='+panel+'&idioma='+idioma+'&id='+id,
        success:function(respuesta){
          getMultimediaByLanguage(idioma);
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
    $('#modalDisability').modal('hide');
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
    $("input:checkbox").prop("checked", false);
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
            asignarNecEspeciales(id, necesidades, idioma);
            $('#fileMultimedia').val('');
          }else{
            alertify.error(data['msg']);
          }
        },error: function(data,status){
          alertify.error(data['msg']);
        }
      });
    }
  }

  function asignarNecEspeciales(id, necesidades, idioma){
    var flag=false;
    for(i=0; i<necesidades.length; i++){
      if(i==necesidades.length-1){
        flag=true;
      }
      setVisibility(id, necesidades[i], flag);
    }
  }

  function setVisibility(id, necesidad, flag){
    var zona = $('#txtZONid').val();
    var panel = $('#txtPANid').val();
    var idioma = $('#cboIdioma').val();
    $.ajax({
        url: base_url+'index.php/admin/setVisibility',
        type: 'POST',
        data: 'zona='+zona+'&panel='+panel+'&idioma='+idioma+'&MULid='+id+'&necesidad='+necesidad,
        success:function(respuesta){
          if(flag){
            getMultimediaByLanguage(idioma);
          }
        },error: function(respuesta){
          // alertify.error('Lo sentimos, no se puede registrar la necesidad especial seleccionada.');
        }
    });
  }  

  function addRow(tabla, fila){
    $("#"+tabla).append(fila);
  }



// MODALES

  function modalAlerta(msje, funcion){
    $('#modalAlertaMensaje').html(msje);
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

  //Función para la validación
  function validarcampo (id,groupid,campo) {
    var idcampo = $('#'+id).val();
    if(idcampo.length<3){
      alertify.error(campo +' ingresado(a) no válido, debe contener almenos 3 letras');
      $('#'+groupid).addClass("has-error");
      return false;
    }else{
      $('#'+groupid).removeClass("has-error");
    }
    return true;
  }