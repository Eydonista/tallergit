<?php

require('configs/include.php');

class c_listacanales extends super_controller {


  
    public function display(){
        
        $options['canal']['lvl2'] = 'all';
        
        $this->orm->connect();
        $this->orm->read_data(array("canal"),$options);
        
  
        $canal = $this->orm->get_objects("canal");
        $this->orm->close();
        
        
        $this->engine->assign('canal',$canal);
        $this->engine->assign('title','Listado de canales');
        $this->engine->display('header.tpl');
        $this->engine->display('listacanales.tpl');
        $this->engine->display('footer.tpl');
    
    }
    
    public function run(){
    
        $this->display();
    
    }
        
}

    $call = new c_listacanales();
    $call->run();


?>