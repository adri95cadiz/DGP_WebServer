<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class ModelLanguages extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function getLanguages(){
        $sql= "select * from language;";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>
