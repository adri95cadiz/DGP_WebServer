<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class ModelPanel extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function setPanel($ZONid){
        $sql= "call SP_panels(2, '', '".$ZONid."', '', '');";
        $query = $this->db->query($sql);
        $sql= "call SP_panels(5, '', '', '', '');";
        $query = $this->db->query($sql);
        $rpta='0';
        foreach ($query->result() as $row) {
            $rpta=$row->newPANid;
        }
        return $rpta;
        // return $query;
    }

    

}
?>
