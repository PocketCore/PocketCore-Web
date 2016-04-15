<?php
namespace pocketcore;

use pocketcore\Master;

class Heart extends \React\EventLoop\LibEventLoop {
    
    public static $tick = [];
    
    public function tick(){
        foreach(self::$tick as $obj){
            $obj->tick();
        }
        parent::tick();
    }
    
} 
?>