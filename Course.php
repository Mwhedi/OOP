<?php
namespace OOPhw;
class Course
{
    public static int $nextID = 0;
    public $name;

    public function __construct($name)
    {
        $this->ID = self::$nextID;
        $this->name = $name;
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
    
}

?>