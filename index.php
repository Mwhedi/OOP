<?php

require_once 'Student.php';
require_once 'Course.php';
require_once 'Loggable.php';
require_once 'Manager.php';

use OOPhw\Student;
use OOPhw\Manager;

$manager = new Manager();

$student1 = new Student('Mohamad Wheidy', 'Mohamad@gmail.com');
$manager->addStudent($student1);

$student2 = new Student('Ahmad Khaled', 'Ahmad@google.com');
$manager->addCourse($student1, 'Java');
$manager->addCourse($student1, 'Css');
$manager->addStudent($student2);

$manager->updateStudent($student1, 'Mohamad Omar Wheidy', 'Mohamad.Geeks@Gmail.ps');

$shwstudent = $manager->showStudentData($student1);
if ($shwstudent) {
    echo 'Show student: ' . $shwstudent->getName(). "<br>";
} else {
    echo 'Student not found.';
}
$manager->deleteStudent($student2);
$logFile = 'log.txt';
if (file_exists($logFile)) {
    echo 'Log file contents:';
    echo "<p>".file_get_contents($logFile) . "</p>";
} else {
    echo 'Log file not found.' ;
}
