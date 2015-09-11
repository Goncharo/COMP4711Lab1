<!DOCTYPE html>
<!--
First Lab Exercise.

Dima Goncharov, A00885037
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        include('Student.php');
        
        $students = array(); //array for holding students
        
        //initialize and add first student to array
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        //initialize and add second student to array
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        //initialize and add third student to array
        $third = new Student();
        $third->surname = "Goncharov";
        $third->first_name = "Dima";
        $third->add_email('work','suicide_party@bcit.com');
        $third->add_grade(100);
        $third->add_grade(100);
        $students['d008'] = $third;
        
        
        //sort student array by key
        ksort($students);
        
        //prints each student out using toString() method
        foreach($students as $student)
            echo $student->toString();
 
        ?>
    </body>
</html>
