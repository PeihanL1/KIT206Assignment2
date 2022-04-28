<?php

class Student {  
    public $student_id;  
    public $given_name;  
    public $family_name;  
    public $group_id;  
    public $title; 
    public $campus;
    public $phone;
    public $email;
    public $photo;
    public $category;

      
    public function __construct($student_id, $given_name, $family_name, $group_id, $title, $campus, $phone, $email, $photo, $category)    
    {    
        $this->student_id = $student_id;  
        $this->given_name = $given_name;  
        $this->family_name = $family_name;  
        $this->groupId = $group_id;  
        $this->title = $title; 
        $this->campus = $campus;
        $this->phone = $phone;
	$this->email = $email;
	$this->photo = $photo;
	$this->category = $category;
    }   
}  

?>