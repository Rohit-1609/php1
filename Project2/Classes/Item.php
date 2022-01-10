<?php


class Item
{
    public $name;
    public $description;

    public static $count=0;
/*function __construct()
{
    echo "Object has created";
}
*/

public function __construct($name,$description)
{
    echo "Object has created having parameters";
    $this->name=$name;
    $this->description=$description;
    static::$count++;
}
    function sayHello()
    {
        echo "Hello";
    }


    
    function getName()
    {
        return $this->name;
    }
}