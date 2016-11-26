<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class ModelPanelDesc extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function setPanelDesc($ZONid, $PANid, $LANid, $titulo, $subtitulo, $contenido){
        $sql= "call SP_panelDesc(2, '".$PANid."', '".$ZONid."', '".$LANid."', '".$titulo."', '".$subtitulo."', '".$contenido."', '');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function getPanelDesc($ZONid, $PANid, $LANid){
        $sql= "call SP_panelDesc(1, '".$PANid."', '".$ZONid."', '".$LANid."', '', '', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }


    

}
?>
