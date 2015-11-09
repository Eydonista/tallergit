<?php

class canal extends object_standard{

    // atributos
    protected $nombre;  
    protected $email;
    protected $descripcion;

    
    // componentes, siempre deben ir
    var $components = array();
    
    // auxiliares para clave primaria y archivos, siempre debe ir
    var $auxiliars = array();
    
    // guarda info importante acerca de los atributos
    public function metadata(){
        return array("nombre"=>array(),"email" => array(),"descripcion"=>array());
    
    }
    public function primary_key(){
        return array("nombre");
    
    }
    //
    public function relational_keys($class,$rel_name){
        switch($class){
        
        
            default:
            break;
        }
    }

    }

?>