<?php

namespace app\controllers;
use base\Cache;
class MainController extends AppController {
    
    public function indexAction() {
        $this->setMeta('Main page', 'Home page', 'main, home');
        $posts = \R::findAll('test');
        $post  = \R::findOne('test', 'id=?', [2]);
        
        $name = 'Peter';
        $age = 35;
        
        $names = ['Micle', 'Andrey', 'Mary'];
        
        $cache = Cache::instance();
        //$cache->set('test', $names);
        //$cache -> delete('test');
        $data = $cache -> get('test');
        
        if(!$data){
            $cache -> set('test', $names);
        }
        debug($data);
        $this->set(compact('name', 'age', 'names', 'posts'));
    }
}
