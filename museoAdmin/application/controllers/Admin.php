<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('templateViews/index');
		$this->load->view('footer');
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

	public function prueba()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('prueba/index');
		$this->load->view('footer');
	}

	public function registroPanel()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('informacion/registroPanel');
		$this->load->view('footer');
	}

	public function registroDispositivo()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('informacion/registroDispositivo');
		$this->load->view('informacion/modalEditarDispositivo');
		$this->load->view('informacion/modalConfirmacion2');
		$this->load->view('informacion/modalConfirmacion3');
		$this->load->view('footer');
	}

	public function registroDetallePanel()
	{
		$data['elements']=$this->modelElements->getElements();
		$this->load->view('header', $data);
		$this->load->view('informacion/registroDetallePanel');
		$this->load->view('informacion/modalDisability');
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
