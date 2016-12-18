<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$data['elements']=$this->modelElements->getElements(); //introducimos el modelo de elementos.
		$this->load->view('header', $data); //Cargamos la vista de la cabecera, con los datos anteriores
		$this->load->view('admin/index'); //Cargamos el Menu
		$this->load->view('footer'); //cargamos el footer de la vista
	}

//MANTENEDOR DE DISPOSITIVOS (ZONAS)
	
	public function registroZonas()
	{
		$data['elements']=$this->modelElements->getElements();
		$data['dispositivos']=$this->modelZone->getAllZones();
		$data['nextId']=$this->modelZone->getNextId();
		$data['salas']=$this->modelRooms->getRooms();
		$this->load->view('header', $data);
		$this->load->view('informacion/registroDispositivo');
		$this->load->view('informacion/modalEditarDispositivo');
		$this->load->view('informacion/modalConfirmacion');
		$this->load->view('informacion/modalConfirmacion2');
		$this->load->view('footer');
	}

	public function registrarDispositivo(){
		$id=trim($this->input->post("id"));
		$sala=trim($this->input->post("sala"));
		$tipoDispositivo=trim($this->input->post("tipoDispositivo"));
		$descripcion=trim($this->input->post("descripcion"));
		$rpta=$this->modelZone->setZone($id, $sala, $tipoDispositivo, $descripcion);
		echo "";
	}

	public function eliminarDispositivo(){
		$id=trim($this->input->post("id"));
		$rpta=$this->modelZone->deleteZone($id);
		echo "";
	}

	public function verificarMultimedia(){
		$id=trim($this->input->post("id"));
		$rpta=$this->modelZone->verificarMultimedia($id);
		if($rpta->num_rows()>0){
			foreach ($rpta->result() as $row) {
			 	$rpta=$row->rpta;
			}
			echo $rpta;
		}else{
			echo $rpta;
		}
	}

	public function editarDispositivo(){
		$id=trim($this->input->post("id"));
		$descripcion=trim($this->input->post("descripcion"));
		$tipoZona=trim($this->input->post("tipoZona"));
		$sala=trim($this->input->post("sala"));
		$estado=trim($this->input->post("estado"));
		$rpta=$this->modelZone->editarZone($id, $descripcion, $tipoZona, $sala, $estado);
		echo "";
	}

	public function tipoDispositivo()
	{
		$data['elements']=$this->modelElements->getElements();
		$data['ELEid']=trim($this->input->post("ELEid"));
		$data['ELEdescription']=trim($this->input->post("ELEdescription"));
		if($data['ELEid']==''){
			redirect(base_url());
		}else{
			$data['zones']=$this->modelZone->getZonesByType($data['ELEid']);
			$this->load->view('header', $data);
			$this->load->view('informacion/listarDispositivos');
			$this->load->view('informacion/modalConfirmacion');
			$this->load->view('informacion/modalConfirmacion2');
			$this->load->view('footer');
		}
	}

//GESTIÓN DE TIPOS DE ZONAS (Tabla ELEMENTS de la bd)

	public function registroTiposZonas()
	{
        $data['elements']=$this->modelElements->getElements();
        $data['tiposZonas']=$this->modelElements->getAllElements();
        $this->load->view('header', $data);
		$this->load->view('admin/registroTipoZonas');
		$this->load->view('admin/modalEditarTipoZona'); //Nombre del archivo
		$this->load->view('informacion/modalConfirmacion');
		$this->load->view('informacion/modalConfirmacion2');
		$this->load->view('footer');
	}

	public function registrarTipoZona(){
		$tipoZona=trim($this->input->post("txtTipoZona"));
		$rpta=$this->modelElements->addElement($tipoZona);
		redirect(base_url().'index.php/admin/registroTiposZonas');
	}

	public function editarTipoZona(){
		$id=trim($this->input->post("id"));
		$description=trim($this->input->post("descripcion"));
		$estado=trim($this->input->post("estado"));
		$rpta=$this->modelElements->updElements($id, $description, $estado);
		echo '';
		// redirect(base_url().'index.php/admin/registroTiposZonas');
	}

	public function eliminarTipoZona(){
		$id=trim($this->input->post("id"));
		$rpta=$this->modelElements->deleteElements($id);
		echo '';
	}

//GESTIÓN DE SALAS

	public function registroSalas()
	{
        $data['elements']=$this->modelElements->getElements();
        $data['salas']=$this->modelRooms->getAllRooms();
        $this->load->view('header', $data);
		$this->load->view('admin/registroSalas');
		$this->load->view('admin/modalEditarSala'); //Nombre del archivo
		$this->load->view('informacion/modalConfirmacion');
		$this->load->view('informacion/modalConfirmacion2');
		$this->load->view('footer');
	}

	public function registrarSala(){
		$descripcion=trim($this->input->post("txtSala"));
		$rpta=$this->modelRooms->addRoom($descripcion);
		redirect(base_url().'index.php/admin/registroSalas');
	}

	public function editarSala(){
		$id=trim($this->input->post("id"));
		$descripcion=trim($this->input->post("descripcion"));
		$estado=trim($this->input->post("estado"));
		$rpta=$this->modelRooms->updRoom($id, $descripcion, $estado);
		echo '';
	}

	public function eliminarSala(){
		$id=trim($this->input->post("id"));
		$rpta=$this->modelRooms->deleteRoom($id);
		echo '';
	}




//MANTENEDOR DE IDIOMAS

	public function idiomas()
	{
		$data['elements']=$this->modelElements->getElements();
		$data['idiomasI']=$this->modelLanguages->getInactiveLanguages();
		$data['idiomasA']=$this->modelLanguages->getLanguages();
		$this->load->view('header', $data);
		$this->load->view('admin/registroIdiomas');
		$this->load->view('informacion/modalConfirmacion');
		$this->load->view('footer');
	}

	public function registrarIdioma(){
		$idioma=trim($this->input->post("cboIdioma"));
		$rpta=$this->modelLanguages->activateLanguage($idioma);
		redirect(base_url().'index.php/admin/idiomas');
	}

	public function desactivarIdioma(){
		$idioma=trim($this->input->post("id"));
		$rpta=$this->modelLanguages->desactivateLanguage($idioma);
		redirect(base_url().'index.php/admin/idiomas');
	}




//MANTENEDOR DE NECESIDADES ESPECIALES

	public function necesidadEspecial()
	{
		$data['elements']=$this->modelElements->getElements();
		$data['necesidades']=$this->modelFeatures->getAllFeatures();
		$this->load->view('header', $data);
		$this->load->view('admin/registroNecesidades');
		$this->load->view('admin/modalEditarNecesidad'); //Nombre del archivo
		$this->load->view('informacion/modalConfirmacion');
		$this->load->view('informacion/modalConfirmacion');
		$this->load->view('footer');
	}

	public function registrarNecesidad(){
		$necesidad=trim($this->input->post("necesidad"));
		$rpta=$this->modelFeatures->setFeature($necesidad);
		echo "";
	}

	public function editarNecesidad(){
		$id=trim($this->input->post("id"));
		$descripcion=trim($this->input->post("descripcion"));
		$estado=trim($this->input->post("estado"));
		$rpta=$this->modelFeatures->updFeature($id, $descripcion, $estado);
		echo '';
	}

 	public function eliminarNecesidad(){
 		$idNecesidad=trim($this->input->post("id"));
		$rpta=$this->modelFeatures->deleteFeature($idNecesidad);
		echo '';
 	}



//MANTENEDOR DE PANELES

	public function registroPanel()
	{
		$data['elements']=$this->modelElements->getElements();
		$data['ZONid']=trim($this->input->post("txtZONid"));
		$data['PANid']= $this->modelPanel->getNextPanelId($data['ZONid']);
		$data['dispositivo']=$this->modelZone->getDispositivo($data['ZONid']);
		$data['paneles']=$this->modelPanelDesc->getPaneles($data['ZONid']);
		$this->load->view('header', $data);
		$this->load->view('informacion/registroPanel');
		$this->load->view('informacion/modalConfirmacion');
		$this->load->view('footer');
	}

	public function registrarPanel(){
		$data['ZONid']=trim($this->input->post("ZONid"));
		$rpta=$this->modelPanel->setPanel($data['ZONid']);
		echo $rpta;
	}

	public function registroDetallePanel()
	{
		$data['elements']=$this->modelElements->getElements();
		$data['ZONid']=trim($this->input->post("ZONid"));
		$data['ELEid']=trim($this->input->post("ELEid"));
		$data['PANid']=trim($this->input->post("PANid"));
		$data['dispositivo']=$this->modelZone->getDispositivo($data['ZONid']);
		$data['idiomas']=$this->modelLanguages->getLanguages();
		$data['necesidades']=$this->modelFeatures->getFeatures();
		$data['imagen']=$this->modelMultimedia->getImagen($data['ZONid'], $data['PANid']);
		$this->load->view('header', $data);
		$this->load->view('informacion/registroDetallePanel');
		$this->load->view('informacion/modalFeatures');
		$this->load->view('informacion/modalConfirmacion');
		$this->load->view('footer');
	}

	public function registrarDetallePanel(){
		$ZONid=trim($this->input->post("ZONid"));
		$PANid=trim($this->input->post("PANid"));
		$LANid=trim($this->input->post("LANid"));
		$titulo=trim($this->input->post("titulo"));
		$subtitulo=trim($this->input->post("subtitulo"));
		$contenido=trim($this->input->post("contenido"));
		$rpta=$this->modelPanelDesc->setPanelDesc($ZONid, $PANid, $LANid, $titulo, $subtitulo, $contenido);
		echo $contenido;
	}

	public function eliminarPanel(){
		$zona=trim($this->input->post("zona"));
		$panel=trim($this->input->post("panel"));
		$files=$this->modelMultimedia->getFilesByPanel($zona, $panel);
		try{
			if($files!="0"){
				foreach ($files as $row) {
					unlink('./assets/files/'.$row['fileName']);
				}
			}
		}catch(Exception $e){ echo $e;}
		$rpta=$this->modelPanel->deletePanel($zona, $panel);
		echo '';
	}

	public function uploadMultimedia(){
		$status = "";
	    $msg = "";
		$ruta="./assets/files";
		if ( ! empty($_FILES))
		{
			$zona=trim($this->input->post("zona"));
			$panel=trim($this->input->post("panel"));
			$idioma=trim($this->input->post("idioma"));
			$codMultimedia=$this->modelMultimedia->getNextCod($zona, $panel, $idioma);
			if($codMultimedia!='0'){
				// $fileName=$zona.'_'.$panel.'_'.$idioma.'_'.$codMultimedia;		//Solo en el 
				//Parámetros para registrar el archivo
				$config['upload_path'] = $ruta;
				$config['allowed_types'] = 'gif|jpg|png|mp4|ogv';
				$config['max_size'] = 1024 * 10;
				$config['remove_spaces'] = true;
				$config['overwrite'] = false;
				// $config['file_name'] = $fileName;
				//Libreria para permitir el upload
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (! $this->upload->do_upload("file")) {
					$status = 'error';
		            $msg = $this->upload->display_errors('', '');
				}else{
					$data = $this->upload->data();
					//Guardar la referencia al archivo en la BD
					$fileName = $data['file_name'];
					// $ruta = $data['full_path'];
					$ruta = $config['upload_path'];
					$this->modelMultimedia->addMultimedia($zona, $panel, $idioma, $codMultimedia, $fileName, $ruta);
	                $status = "success";
	                $msg = $codMultimedia;
				}
			}else{
				$status = 'error';
	        	$msg = 'No se puede registrar el archivo en el sistema';
			}
		}else{
			$status = 'error';
	        $msg = 'No se puede guardar el archivo seleccionado';
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));
	}

	public function uploadImagen(){
		$status = "";
	    $msg = "";
		$ruta="./assets/files";
		if ( ! empty($_FILES))
		{
			$zona=trim($this->input->post("zona"));
			$panel=trim($this->input->post("panel"));
			$descripcion=trim($this->input->post("descripcion"));
			
			// $fileName=$zona.'_'.$panel.'_'.$idioma.'_'.$codImagen;		//Solo en el 
			//Parámetros para registrar el archivo
			$config['upload_path'] = $ruta;
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = 1024 * 4;
			$config['remove_spaces'] = true;
			$config['overwrite'] = false;
			//Libreria para permitir el upload
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			if (! $this->upload->do_upload("file")) {
				$status = 'error';
	            $msg = $this->upload->display_errors('', '');
			}else{
				$data = $this->upload->data();
				//Guardar la referencia al archivo en la BD
				$fileName = $data['file_name'];
				// $ruta = $data['full_path'];
				$ruta = $config['upload_path'];
				//Cuando se puedan asignar varias imágenes a un panel, se quitaría esto.
				$anteriorImgName = $this->modelMultimedia->eliminarImagenPrevia($zona, $panel);
				if($anteriorImgName!='0'){
					unlink('./assets/files/'.$anteriorImgName);		//Actualizar imagen, xq solo hay una
				}
				$this->modelMultimedia->addImagen($zona, $panel, $fileName, $descripcion);
                $status = "success";
                $msg = 'Imagen actualizada satisfactoriamente';	
				// $msg = $anteriorImgName;
			}

		}else{
			$status = 'error';
	        $msg = 'No se puede guardar el archivo seleccionado';
		}
		echo json_encode(array('status' => $status, 'msg' => $msg));
	}

	public function setVisibility(){
		$zona=trim($this->input->post("zona"));
		$panel=trim($this->input->post("panel"));
		$idioma=trim($this->input->post("idioma"));
		$MULid=trim($this->input->post("MULid"));
		$necesidad=trim($this->input->post("necesidad"));
		$rpta=$this->modelMultimedia->setVisibility($zona, $panel, $idioma, $MULid, $necesidad);
		echo '';
	}

	public function getPanelByLanguage(){
		$zona=trim($this->input->post("zona"));
		$panel=trim($this->input->post("panel"));
		$idioma=trim($this->input->post("idioma"));
		$rpta=$this->modelPanelDesc->getPanelDesc($zona, $panel, $idioma);
		echo json_encode($rpta);
	}

	public function getMultimediaByLanguage(){
		$zona=trim($this->input->post("zona"));
		$panel=trim($this->input->post("panel"));
		$idioma=trim($this->input->post("idioma"));
		$rpta=$this->modelMultimedia->getMultimedia($zona, $panel, $idioma);
		echo json_encode($rpta);
	}

	public function downloadFile(){
		$this->load->helper('download');
		$name=trim($this->input->post("txtDescripcionFile"));
		// $filePath=file_get_contents(trim($this->input->post("txtRutaFile")));
		$data=file_get_contents('./assets/files/'.$name);
		force_download($name, $data);
	}

	public function eliminarArchivo(){
		$zona=trim($this->input->post("zona"));
		$panel=trim($this->input->post("panel"));
		$idioma=trim($this->input->post("idioma"));
		$id=trim($this->input->post("id"));
		$fileName=$this->modelMultimedia->getFileName($zona, $panel, $idioma, $id);
		unlink('./assets/files/'.$fileName);
		$rpta=$this->modelMultimedia->eliminarArchivo($zona, $panel, $idioma, $id);
		echo '';
		echo $fileName;
	}


    
	
	public function login()
	{
		$this->load->view('admin/login');
	}

	

}
