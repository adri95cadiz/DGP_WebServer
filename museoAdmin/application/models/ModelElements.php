<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class ModelElements extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function getElements(){
        $sql= "call SP_elements(1, '', '', '')";
        $query = $this->modelZone->async_query($sql);
        return $query;
    }



}
?>
