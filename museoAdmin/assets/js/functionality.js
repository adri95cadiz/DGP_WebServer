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
<<<<<<< HEAD
          alertify.success('Tipo de zona editada');
          location.reload();
=======
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
              // nuevaFila=nuevaFila+'<td> <button type="button" class="btn btn-primary btn-circle" onClick="downloadFile(\'<?php echo base_url(); ?>\', \''+descripcion+'\', \''+ruta+'\')"><i class="fa fa-download"></i></button> </td>';
              nuevaFila=nuevaFila+'<td><form action="'+base_url+'index.php/admin/downloadFile" target="_blank" method="POST" role="form">';
              nuevaFila=nuevaFila+'<input type="text" name="txtDescripcionFile" value="'+descripcion+'" hidden>';
              nuevaFila=nuevaFila+'<input type="text" name="txtRutaFile" value="'+ruta+'" hidden>';
              nuevaFila=nuevaFila+'<button type="submit" class="btn btn-primary btn-circle"><i class="fa fa-download"></i></button>';
              nuevaFila=nuevaFila+'</form></td>';
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
>>>>>>> 4903d91859b5f465b453f97fa2c6f21b30fef45e
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