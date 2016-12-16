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
        $sql= "call SP_multimedia(2, '".$panel."', '".$zona."', '".$idioma."', '', '', '".$description."', '".$ruta."', '', '');";
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
        return $query->result();
    }

    public function getFilesByPanel($zona, $panel){
        $sql= "call SP_multimedia(6, '".$panel."', '".$zona."', '', '', '', '', '', '', '');";
        $query = $this->modelZone->async_query($sql);
        return $query;
    }

    public function getFileName($zona, $panel, $idioma, $id){
        $sql= "call SP_multimedia(7, '".$panel."', '".$zona."', '".$idioma."', '".$id."', '', '', '', '', '');";
        $query = $this->modelZone->async_query($sql);
        $rpta='';
        foreach ($query as $row) {
            $rpta=$row['fileName'];
        }
        return $rpta;
    }

    public function eliminarArchivo($zona, $panel, $idioma, $id){
        $sql= "call SP_multimedia(8, '".$panel."', '".$zona."', '".$idioma."', '".$id."', '', '', '', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function addImagen($zona, $panel, $fileName, $description){
        $sql= "call SP_multimedia(3, '".$panel."', '".$zona."', '', '', '', '".$description."', '".$fileName."', '', '');";
        $query = $this->db->query($sql);
        return $sql;
    }

    public function eliminarImagenPrevia($zona, $panel){
        $sql= "call SP_multimedia(9, '".$panel."', '".$zona."', '', '', '', '', '', '', '');";
        $query = $this->modelZone->async_query($sql);
        $rpta='0';
        if($query!="0"){
            foreach ($query as $row) {
                $rpta=$row['fileName'];
            }
        }
        $sql= "call SP_multimedia(10, '".$panel."', '".$zona."', '', '', '', '', '', '', '');";
        $this->db->query($sql);
        return $rpta;
    }

    public function getImagen($zona, $panel){
        $sql= "call SP_multimedia(11, '".$panel."', '".$zona."', '', '', '', '', '', '', '');";
        $query = $this->modelZone->async_query($sql);
        return $query;
    }


}
?>
