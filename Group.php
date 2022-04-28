<?php

class Group {  
    public $group_id;    
    public $group_name;  

      
    public function __construct($group_id, $group_name)    
    {    
        $this->group_id = $group_id;  
        $this->group_name = $group_name;  
    }   
}  

?>