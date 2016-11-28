<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class modelZone extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }


    public function getZones(){
        $sql= "select * from zone;";
        $query = $this->async_query($sql);
        return $query;
    }


    public function getAllZones(){
        $sql= "call SP_zones(1, '', '', '', '', '');";
        $query = $this->async_query($sql);
        return $query;
    }

    function async_query($sql){
        $db = $this->load->database('default',TRUE);
        $query = $db->query($sql);
        $rpta = $query->result_array();
        $query->next_result();
        $query->free_result();
        if (count($rpta) > 0) {
              return $rpta;
        } else {
              return 0;
        }
    }

    public function getDispositivo($ZONid)
    {
        $sql= "call SP_zones(5, '".$ZONid."', '', '', '', '');";
        $query = $this->query($sql);
        return $query;
    }

    public function getNextId(){
        $sql= "call SP_zones(6, '', '', '', '', '');";
        $query = $this->async_query($sql);
        return $query;
    }

    public function getZonesByType($type){
        $sql= "call SP_zones(7, '', '', '', '".$type."', '');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function setZone($id, $sala, $tipoDispositivo, $descripcion){
        $sql= "call SP_zones(2, '".$id."', '".$descripcion."', '".$sala."', '".$tipoDispositivo."', 'A');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function deleteZone($id){
        $sql= "call SP_zones(4, '".$id."', '', '', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>
