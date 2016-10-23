<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class modelFeatures extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function getFeatures(){
        $sql= "select * from FEATURE;";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>
