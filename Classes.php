<?php

class Classes {  
    public $class_id;    
    public $group_id;  
    public $day; 
    public $start;
    public $end;
    public $room;

      
    public function __construct($class_id, $group_id, $day, $start, $end, $room)    
    {    
        $this->class_id = $class_id;  
        $this->groupId = $group_id;  
        $this->day = $day; 
        $this->start = $start;
        $this->end = $end;
	$this->room = $room;
    }   
}  

?>