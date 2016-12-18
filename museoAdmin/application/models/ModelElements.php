<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class modelElements extends CI_Model { //CLASE TIPO ZONA

    //CONSTRUCTOR DE LA CLASE 
    function __construct() {
        parent::__construct();
    }

    public function getElements(){
        $sql= "call SP_elements(1, '', '', '')";//Listamos los tipos de zonas activos
        $query = $this->modelZone->async_query($sql);
        return $query;
    }

    public function getAllElements(){
        $sql= "call SP_elements(5, '', '', '')";
        $query = $this->modelZone->async_query($sql);
        return $query;
    }

    public function addElement($tipoZona){
        $sql = "call SP_elements(2, '', '".$tipoZona."', '')";
        $query = $this->db->query($sql);
        return $query;
    }

    public function updElements($id,$descripcion, $estado){
        $sql = "call SP_elements(3, '".$id."', '".$descripcion."', '".$estado."')";
        $query = $this->db->query($sql);
        return $query;
    }

    public function deleteElements($id){
        $sql = "call SP_elements(4, '".$id."', '', '')";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>
