<?php

class video extends object_standard{

    // atributos
    protected $id;
    protected $titulo;  
    protected $descripcion;
    protected $url;
    protected $subida;
    protected $canal;

    var $components = array();
 
    var $auxiliars = array();

    public function metadata(){
        return array("id"=>array(),"titulo"=>array(),"descripcion" => array(),"url"=>array(),"subida"=>array(),"canal" => array("foreign_name" => "c_v", "foreign" => "canal", "foreign_attribute" => "nombre"));
    
    }
    public function primary_key(){
        return array("id");
    
    }
    // dice si esta clase esta relacionada con otra, y si si, cual(es) atributos
    public function relational_keys($class,$rel_name){
        switch($class){
        
            
            case "canal":
            
            switch($rel_name){
            
                case "c_v":
                return array("canal"); // nombre de la variable protected creada arriba
                break;
            }
            
            break;
            default:
            break;
        }
    }

    }

?>