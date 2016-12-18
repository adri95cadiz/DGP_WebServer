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

    public function getAllRooms(){
        $sql= "call SP_rooms(5, '', '', '')";       //Listamos todas las salas
        $query = $this->modelZone->async_query($sql);
        return $query;
    }

    public function addRoom($description){
        $sql = "call SP_rooms(2, '', '".$description."', '')";
        $query = $this->db->query($sql);
        return $query;
    }

    public function updRoom($id, $description, $estado){
        $sql = "call SP_rooms(3, '".$id."', '".$description."', '".$estado."')";
        $query = $this->db->query($sql);
        return $query;
    }

    public function deleteRoom($id){
        $sql = "call SP_rooms(4, '".$id."', '', '')";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>
