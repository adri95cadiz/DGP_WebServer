<?php 
	if( !defined('BASEPATH')) 
		exit('No se permite acceso al script');

class modelElements extends CI_Model { //CLASE TIPO ZONA

    /*tipo int,
    id int,                 -- Si le pongo ROOid, hay errores porq confunde el alias con el nombre del campo de la tabla
    description varchar(100),
    state char(1)
)BEGIN
    -- listar todos los datos de la tabla
    if tipo=1 then      
        select E.ELEid as 'ELEid', E.ELEdescription as 'ELEdescription',    
            CASE E.ELEstate WHEN 'A' THEN 'Activo' ELSE 'Inactivo' END as 'ELEstate'
        from elements E;
    end if;
    -- registrar nuevo
    if tipo=2 then      
        SELECT ifnull(max(ELEid)+1,1) into id from elements;
        insert into elements (ELEid, ELEdescription, ELEstate) values (id, description, state);
    end if;
     if tipo=3 then     
        update feature set FEAdescription = description, ZONstate=state where FEAid=id;
     end    if;
    if tipo=4 then
        delete from elements where ELEid=id;
    end if;*/

    //CONSTRUCTOR DE LA CLASE 
    function __construct() {
        parent::__construct();
    }

    public function getElements(){
        $sql= "call SP_elements(1, '', '', '')";//Listamos todos los elementos y los introducimos en la variable $sql
        $query = $this->modelZone->async_query($sql);
        return $query;
    }

    public function editarElements($id,$descripcion, $estado){
        $sql = "call SP_elements(3, '".$id."', '".$description."', '".$estado."')";
        $query = $this->db->query($sql);
        return $query;

    }

}
?>
