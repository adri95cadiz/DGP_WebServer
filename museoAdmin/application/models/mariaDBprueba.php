<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class MariaDBprueba extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

	// public function setCaracteristicas($data){
 //        $sql= "call SP_setHojaCaract('".$data['usuario']."', '".$data['cod']."', '".$data['mision']."', 
 //            '".$data['empieza']."', '".$data['incluye']."', '".$data['termina']."', '".$data['proveedor']."', 
 //            '".$data['cliente']."', '".$data['entrada']."', '".$data['salida']."', '".$data['inspecciones']."', 
 //            '".$data['registros']."', '".$data['variables']."', '".$data['indicadores']."');";
 //        $query = $this->db->simple_query($sql);
 //        return $query;
 //    }

    public function getData(){
        // $sql= "select * from idiomas;";
        // $query = $this->db->query($sql);
        // return $query;
    }


}
?>