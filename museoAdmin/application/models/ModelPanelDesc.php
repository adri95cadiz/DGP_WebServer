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

    public function getPaneles($ZONid){
        $sql= "call SP_panelDesc(3, '', '".$ZONid."', '1', '', '', '', '');";
        $query = $this->modelZone->async_query($sql);
        return $query;
    }

    public function getPanelDesc($zona, $panel, $idioma){
        $sql= "call SP_panelDesc(1, '".$panel."', '".$zona."', '".$idioma."', '', '', '', '');";
        $query = $this->db->query($sql);
        return $query->result();
    }

    public function deletePanelDescByPanel($zona, $panel){
        $sql= "call SP_panelDesc(4, '".$panel."', '".$zona."', '1', '', '', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }


    

}
?>
