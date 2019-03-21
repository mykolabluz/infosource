<?php

namespace app\models;

/**
 * Description of Tree
 *
 * @author mukol
 */
class Tree
{
   
    private $array;
    
    public function __construct() {
        $this->array = $this->createArray();
    }
    
    public function getTree(){
        return $this->printTree($this->createTree($this->array));
    }
    
    private function printTree($tree, $count = 0) {
        
        if(!is_null($tree) && count($tree) > 0) {
            $list = '<ul>';
            
            foreach($tree as $key => $value) {
                $list .= '<li><a href="#" class="profile-followers" data-toggle="modal" data-target="#modal">№ – ' . $key . '</a>';
                
                $list .= $this->printTree($value['children'], $count);
                
                $list .= '</li>';
            }
            $list .= '</ul>';
            
            return $list;
        }
        return null;
    }
    
    private function createTree($array, $parent_id = 0) {

	$tree = array();
        
	foreach($array as $id => $item) {
            
            if($item['parent_id'] == $parent_id && $id != $item['parent_id']) {
                unset($array[$id]);
                $tree[$id] = array(
                    $id => $item,
                    'level' => 0,
                    'children' => $this->createTree($array, $id)
                );
            }
	}
        return $tree;
    }
    
    private function createArray(){
        $parents = $this->createParents();
        $array = array();
        $count = rand(100, 1000);
        for($i = 100; $i < $count; $i++){
            $parent_id = 0;
            if(in_array($i, $parents)){
                $parent_id = array_search($i, $parents);
            }
            $array[$i] = array('parent_id' => $parent_id);
        }
        return $array;
    }
    
    
    private function createParents(){
        $array = array();
        $counter = rand(100, 1000);
        for($i = 100; $i < $counter; $i++){
            $value = rand(100, 1000);
            $parent = rand(100, 1000);
            $array[$parent] = $value;
        }
        return $array;
    }
}
