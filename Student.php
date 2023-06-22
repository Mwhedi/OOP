<?php
namespace OOPhw;

class Student
{
    public static int $nextID = 0;
    public string $name;
    public string $email;
    public $courses= [];

    public function __construct($name, $email)
    {
        $this->ID = self::$nextID;
        self::$nextID++;
        $this->name = $name;
        $this->email = $email;
    }

    public function getID()
    {
        return $this->ID;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCourses()
    {
        var_dump($courses);
    }

    public function addCourse(string $course)
    {
        $this->courses[]=$course;
    }

}
?>