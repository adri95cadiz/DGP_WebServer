<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class modelRooms extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function getRooms(){
        $sql= "select * from room;";
        $query = $this->db->query($sql);
        return $query;
    }

}
?>
