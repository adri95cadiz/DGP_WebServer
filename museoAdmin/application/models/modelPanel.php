<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class ModelPanel extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function setPanel($ZONid){
        $sql= "call SP_panels(5, '', '".$ZONid."', '', '');";
        $query = $this->modelZone->async_query($sql);
        $rpta='0';
        foreach ($query as $row) {
            $rpta=$row['newPANid'];
        }
        $sql= "call SP_panels(2, '', '".$ZONid."', '', '');";
        $query = $this->db->query($sql);
        return $rpta;
        // return $query;
    }

    public function getNextPanelId($ZONid){
        $sql= "call SP_panels(5, '', '".$ZONid."', '', '');";
        $query = $this->db->query($sql);
        $rpta='0';
        foreach ($query->result() as $row) {
            $rpta=$row->newPANid;
        }
        return $rpta;
    }

    

}
?>
