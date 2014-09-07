<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Jbnahan\Domain\School\Event;

use Broadway\Serializer\SerializableInterface;
use Jbnahan\Domain\School\Model\ClassIdentity;

/**
 * Description of ClassOpenedEvent
 *
 * @author jb
 */
class ClassOpened extends SerializableInterface {
    
    public $id;

    public $identity;
    
    public static function deserialize(array $data){
    	$e = new ClassOpened();
    	$e->id = $data['id'];
    	$e->identity = new ClassIdentity($data['name'],$data['grade']);
		return $e; 
	}

    /**
     * @return array
     */
    public function serialize(){
    	return array("name"=>$this->identity->name, "grade"=>$this->indentity->grade,"id"=>$this->id);
    }
}
