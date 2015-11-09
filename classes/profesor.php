<?php

class profesor extends object_standard{

    // atributos
    protected $cedula;
    protected $nombre;  
    protected $nacimiento;
    protected $titulo;
    protected $departamento;

    
    // componentes, siempre deben ir
    var $components = array();
    
    // auxiliares para clave primaria y archivos, siempre debe ir
    var $auxiliars = array();
    
    // guarda info importante acerca de los atributos
    public function metadata(){
        return array("cedula"=>array(),"nombre" => array(),"nacimiento"=>array(),"titulo" => array(),"departamento" => array());
    
    }
    public function primary_key(){
        return array("cedula");
    
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