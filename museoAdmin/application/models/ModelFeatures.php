<?php 
    if( !defined('BASEPATH')) 
        exit('No se permite acceso al script');

class ModelFeatures extends CI_Model {

    //CONSTRUCTOR DE LA CLASE
    function __construct() {
        parent::__construct();
    }

    public function getFeatures(){
        $sql= "call SP_features(1, '', '', '');";       //Listamos solo las necesidad especial que estancon estado A
        $query = $this->modelZone->async_query($sql);
        return $query;
    }

    public function getAllFeatures(){
        $sql= "call SP_features(5, '', '', '')";       //Listamos todooo
        $query = $this->modelZone->async_query($sql);
        return $query;
    }

    public function setFeature($necesidad){
        $sql= "call SP_features(2, '0', '".$necesidad."', 'A');";
        $query = $this->db->query($sql);
        return $query;
    }

    public function updFeature($id, $description, $estado){
        $sql = "call SP_features(3, '".$id."', '".$description."', '".$estado."')";
        $query = $this->db->query($sql);
        return $query;
    }

    public function deleteFeature($id){
        $sql= "call SP_features(4, '".$id."', '', '');";
        $query = $this->db->query($sql);
        return $query;
    }


}
?>
