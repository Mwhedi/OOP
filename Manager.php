<?php
namespace OOPhw;
use  OOPhw\Traits\Loggable;

class Manager
{
    use Loggable;
    public $students = array();

    public function addStudent(Student $student)
    {
        $this->students[] = $student;
        echo "Added student:<br>" ;
        echo "Name: {$student->name}";
        echo "Email: {$student->email}";

        echo "<br>";

    }
    public function addCourse(Student $student , $course)
    {
        $student->courses[]=$course;
        
    }
    public function updateStudent(Student $student, $name, $email)
    {
        $student->name = $name;
        $student->email = $email;
        echo "<br>";

        echo"Updated student: ID={$student->getID()}, Name={$student->getName()}, Email={$student->getEmail()} <br>";
        echo "<br>";

    }

    public function deleteStudent(Student $student)
    {
        $index = array_search($student, $this->students);
        if ($index !== false) {
            unset($this->students[$index]);
            echo "<br>";
            echo"Deleted student: ID={$student->getID()}, Name={$student->getName()}, Email={$student->getEmail()} <br>";
            echo "<br>";

        }
    }
    public function showStudentData(Student $student)
    {
        echo "Name: {$student->name}";
        echo "Email: {$student->email}";
        echo "Courses:";
        foreach ($student->courses as $course) {
            echo "- $course";
        }
        echo "<br>";
    }
}

?>