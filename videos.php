<?php

require('./configs/include.php');

class c_videos extends super_controller {


  
    public function display(){
        
        if (isset($this->post->nombre)){
        
        $cod['canal']['nombre'] = $this->post->nombre;
        $options['canal']['lvl2'] = 'one';
        
        $cod['video']['canal'] = $this->post->nombre;
        $options['video']['lvl2'] = 'by_canal';
        
        $components['canal']['video'] = array("c_v");
        
        $this->orm->connect();
        $this->orm->read_data(array("canal","video"),$options,$cod);
        
        
        

        $canal = $this->orm->get_objects("canal",$components);
       
  
        
        $this->engine->assign('canal',$canal[0]);
        }
        
        
        $this->engine->assign('title','VIDEOS DE UN CANAL');
        $this->engine->display('header.tpl');
        $this->engine->display('videos.tpl');
        $this->engine->display('footer.tpl');
    
    }
    
    public function run(){
    
        $this->display();
    
    }
        
}

    $call = new c_videos();
    $call->run();


?>