<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('templateViews/index');
		$this->load->view('footer');
	}

	public function prueba()
	{
		$this->load->view('header');
		$this->load->view('prueba/index');
		$this->load->view('footer');
	}

	public function registroPanel()
	{
		$this->load->view('header');
		$this->load->view('information/registroPanel');
		$this->load->view('information/modalDisability');
		$this->load->view('footer');
	}

	public function forms()
	{
		$this->load->view('header');
		$this->load->view('templateViews/forms');
		$this->load->view('footer');
	}

	public function blank()
	{
		$this->load->view('header');
		$this->load->view('templateViews/blank');
		$this->load->view('footer');
	}

	public function buttons()
	{
		$this->load->view('header');
		$this->load->view('templateViews/buttons');
		$this->load->view('footer');
	}

	public function flot()
	{
		$this->load->view('header');
		$this->load->view('templateViews/flot');
		$this->load->view('footer');
	}

	public function grid()
	{
		$this->load->view('header');
		$this->load->view('templateViews/grid');
		$this->load->view('footer');
	}

	public function icons()
	{
		$this->load->view('header');
		$this->load->view('templateViews/icons');
		$this->load->view('footer');
	}

	public function login()
	{
		$this->load->view('templateViews/login');
	}

	public function morris()
	{
		$this->load->view('header');
		$this->load->view('templateViews/morris');
		$this->load->view('footer');
	}

	public function notifications()
	{
		$this->load->view('header');
		$this->load->view('templateViews/notifications');
		$this->load->view('footer');
	}

	public function panels()
	{
		$this->load->view('header');
		$this->load->view('templateViews/panels-wells');
		$this->load->view('footer');
	}

	public function tables()
	{
		$data['idiomas']=$this->mariaDBprueba->getData();
		$this->load->view('header');
		$this->load->view('templateViews/tables', $data);
		$this->load->view('footer');
	}

	public function typography()
	{
		$this->load->view('header');
		$this->load->view('templateViews/typography');
		$this->load->view('footer');
	}
}
