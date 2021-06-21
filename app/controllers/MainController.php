<?php

namespace app\controllers;
use base\Cache;
class MainController extends AppController {
    
    public function indexAction() {
       // $this->setMeta('Main page', 'Home page', 'main, home');
        //$posts = \R::findAll('test');
      //  $post  = \R::findOne('test', 'id=?', [2]);
        
        //$name = 'Peter';
        //$age = 35;
        
        //$names = ['Micle', 'Andrey', 'Mary'];
        
        //$cache = Cache::instance();
        //$cache->set('test', $names);
        //$cache -> delete('test');
       // $data = $cache -> get('test');
        
        //if(!$data){
       //     $cache -> set('test', $names);
        //}
        //debug($data);
       // $this->set(compact('name', 'age', 'names', 'posts'));
        $value_lumi = 30;
        $date_lumi = '18.06.2021';
        $lumi_warn = 'Warning Lumi Warn';
        
        $value_temp = 23;
        $date_temp = '18.06.2021'; 
        $temp_warn = 'Warning Temp Warn';
        
        $value_humi = 45;
        $date_humi = '18.06.2021';
        $humi_warn = 'Warning Humi Warn';
           
        $value_lamp = 0;
        $value_door = 1;
               
        
        $this->set(compact('value_lumi', 'date_lumi', 'lumi_warn',
                           'value_temp', 'date_temp',  'temp_warn',
                           'value_humi', 'date_humi', 'humi_warn',
                           'value_lamp', 'value_door', 
                  ));
    }
    
    public function dashboardAction() {
        
    }
}
