<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>COMP4711-Lab1</title>
  </head>
  <body>

    <?php
    include('student.php');
    $students = array();

    // Student sample 1
    $first = new Student();
    $first->surname = "Doe";
    $first->first_name = "John";
    $first->add_email('home','john@doe.com');
    $first->add_email('work','jdoe@mcdonalds.com');
    $first->add_grade(65);
    $first->add_grade(75);
    $first->add_grade(55);
    $students['j123'] = $first;

    // Student sample 2
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

    // Add myself as a student
    $me = new Student();
    $me->surname = "Jason";
    $me->first_name = "Chen";
    $me->add_email('home','jchen415@my.bcit.ca');
    $me->add_grade(95);
    $me->add_grade(90);
    $me->add_grade(85);
    $students['a280'] = $me;

    // Print all students info
    foreach ($students as $student) {
        echo $student->toString();
    }
    ?>

  </body>
</html>
