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
		// $this->load->view('informacion/modalConfirmacion2');
		$this->load->view('informacion/modalConfirmacion');
		$this->load->view('informacion/modalConfirmacion3');
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

	public function tipoDispositivo()
	{
		$data['elements']=$this->modelElements->getElements();
		$data['ELEid']=trim($this->input->post("ELEid"));
		$data['ELEdescription']=trim($this->input->post("ELEdescription"));
		$data['zones']=$this->modelZone->getZonesByType($data['ELEid']);
		$this->load->view('header', $data);
		$this->load->view('informacion/listarDispositivos');
		$this->load->view('informacion/modalConfirmacion2');
		$this->load->view('informacion/modalConfirmacion3');
		$this->load->view('footer');
	}

	public function registroTiposZonas()
	{
        $data['elements']=$this->modelElements->getElements();
        $this->load->view('header', $data);
		$this->load->view('admin/registroTipoZonas');
		$this->load->view('admin/modalEditarZona'); //Nombre del archivo
		$this->load->view('footer');
	}




//MANTENEDOR DE IDIOMAS

	public function idiomas()
	{
		$data['elements']=$this->modelElements->getElements();
		$data['idiomas']=$this->modelLanguages->getLanguages();
		$this->load->view('header', $data);
		$this->load->view('admin/registroIdiomas');
		$this->load->view('footer');
	}




//MANTENEDOR DE NECESIDADES ESPECIALES

	public function necesidadEspecial()
	{
		$data['elements']=$this->modelElements->getElements();
		$data['necesidades']=$this->modelFeatures->getFeatures();
		$this->load->view('header', $data);
		$this->load->view('admin/registroNecesidades');
		$this->load->view('informacion/modalConfirmacion');
		$this->load->view('footer');
	}

	public function registrarNecesidad(){
		$necesidad=trim($this->input->post("necesidad"));
		$rpta=$this->modelFeatures->setFeature($necesidad);
		echo "";
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
		$data['dispositivo']=$this->modelZone->getDispositivo($data['ZONid']);
		$this->load->view('header', $data);
		$this->load->view('informacion/registroPanel');
		$this->load->view('footer');
	}


	public function registroDetallePanel()
	{
		$data['elements']=$this->modelElements->getElements();
		$data['ZONid']=trim($this->input->post("txtZONid"));
		$data['dispositivo']=$this->modelZone->getDispositivo($data['ZONid']);
		$this->load->view('header', $data);
		$this->load->view('informacion/registroDetallePanel');
		$this->load->view('informacion/modalFeatures');
		$this->load->view('informacion/modalConfirmacion');
		$this->load->view('footer');
	}

	public function registroSalas()
	{
		$data['salas']=$this->modelRooms->getRooms();
		$this->load->view('header', $data);
		$this->load->view('admin/registroSalas');
		$this->load->view('footer');
	}
        
    
//CONTROLES DE PLANTILLA

	public function forms()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/forms');
		$this->load->view('footer');
	}

	public function blank()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/blank');
		$this->load->view('footer');
	}

	public function buttons()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/buttons');
		$this->load->view('footer');
	}

	public function flot()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/flot');
		$this->load->view('footer');
	}

	public function grid()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/grid');
		$this->load->view('footer');
	}

	public function icons()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/icons');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function morris()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/morris');
		$this->load->view('footer');
	}

	public function notifications()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/notifications');
		$this->load->view('footer');
	}

	public function panels()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/panels-wells');
		$this->load->view('footer');
	}

	public function tables()
	{
		// $data['idiomas']=$this->mariaDBprueba->getData();
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/tables');
		$this->load->view('footer');
	}

	public function typography()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/typography');
		$this->load->view('footer');
	}
}
