<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class modelZone extends CI_Model {

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

    public function getZones(){
        $sql= "select * from zone;";
        $query = $this->db->query($sql);
        return $query;
    }

    public function getAllZones(){
        $sql= "select * from zone Z inner join ROOM R on Z.ROOid=R.ROOid inner join ELEMENTS E on Z.ELEid=E.ELEid";
        $query = $this->db->query($sql);
        return $query;
    }

    public function getDispositivo($ZONid)
    {
        $sql= "select * from zone Z inner join ROOM R on Z.ROOid=R.ROOid inner join ELEMENTS E on Z.ELEid=E.ELEid where Z.ZONid='".$ZONid."';";
        $query = $this->db->query($sql);
        return $query;
    }
    
    // public function getListZones(){
    //     $sql= "select * from zone;";
    //     $query = $this->db->query($sql);
    //     return $query;
    // }

    public function getZonesByType($type){
        $sql= "select * from ZONE Z inner join ROOM R on Z.ROOid=R.ROOid where ELEid='".$type."' and ZONstate='A';";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>
