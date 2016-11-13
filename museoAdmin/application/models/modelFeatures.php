<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class modelFeatures extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function getFeatures(){
        $sql= "call SP_features(1, '', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function setFeature($necesidad){
        $sql= "call SP_features(2, '0', '".$necesidad."', 'A');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function editFeature($id){
        $sql= "call SP_features(3, '".$id."','', '');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function deleteFeature($id){
        $sql= "call SP_features(4, '".$id."', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>
