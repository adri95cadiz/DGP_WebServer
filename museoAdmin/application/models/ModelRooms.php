<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class ModelRooms extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function getRooms(){
        $sql= "call SP_rooms('1', '', '', '')";
        $query = $this->modelZone->async_query($sql);
        return $query;
    }

}
?>
