<?php

/* 
 Class that represents a student.
 */

class Student{
    
    //Default constructor
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //Adds an email to the emails array
    function add_email($which,$address){
        $this->emails[$which] = $address;
    }
    
    //Adds a grade to the grades array
    function add_grade($grade){
        $this->grades[] = $grade;
    }
    
    //Returns the average of all grades in the grades array
    function average(){
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    //Prints the student as a string
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}

