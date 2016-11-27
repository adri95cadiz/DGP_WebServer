<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class ModelMultimedia extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function getNextCod($zona, $panel, $idioma){
        $sql= "call SP_multimedia(4, '".$panel."', '".$zona."', '".$idioma."', '', '', '', '', '', '');";
        $query = $this->modelZone->async_query($sql);
        $flag=false;
        foreach ($query as $row) {
            $query=$row['MULid'];
            $flag=true;
        }
        if($flag){
            return $query;
        }else{
            return "0";
        }
    }

    public function addMultimedia($zona, $panel, $idioma, $id, $description, $ruta){
        $sql= "call SP_multimedia(2, '".$panel."', '".$zona."', '".$idioma."', '".$id."', '', '".$description."', '".$ruta."', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function setVisibility($zona, $panel, $idioma, $MULid, $necesidad){
        $sql= "call SP_multimedia(5, '".$panel."', '".$zona."', '".$idioma."', '".$MULid."', '".$necesidad."', '', '', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function getMultimedia($zona, $panel, $idioma){
        $sql= "call SP_multimedia(1, '".$panel."', '".$zona."', '".$idioma."', '', '', '', '', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>
