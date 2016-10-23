<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class modelLanguajes extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function getLanguajes(){
        $sql= "select * from LANGUAJE;";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>
