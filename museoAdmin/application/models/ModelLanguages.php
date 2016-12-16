<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class ModelLanguages extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function getInactiveLanguages(){
        $sql= "call SP_languages(1, '', '', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function getLanguages(){
        $sql= "call SP_languages(5, '', '', '', '');";
        $query = $this->modelZone->async_query($sql);
        return $query;
    }

    public function activateLanguage($idioma){
        $sql= "call SP_languages(2, '".$idioma."', '', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function desactivateLanguage($idioma){
        $sql= "call SP_languages(4, '".$idioma."', '', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>
