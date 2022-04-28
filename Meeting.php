<?php

class Meeting {  
    public $meeting_id;    
    public $group_id;  
    public $day; 
    public $start;
    public $end;
    public $room;

      
    public function __construct($meeting_id, $group_id, $day, $start, $end, $room)    
    {    
        $this->meeting_id = $meeting_id;  
        $this->group_id = $group_id;  
        $this->day = $day; 
        $this->start = $start;
        $this->end = $end;
	$this->room = $room;
    }   
}  

?>