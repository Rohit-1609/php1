<?php

class Item
{
  public $name;
  public $description="this is a default description";
  
  public static $count=0;
  
  function sayHello()
{
    echo "Hello";
}

public function __construct($name,$description)
{
    echo "Items object created";
    $this->name = $name;
    $this->description = $description;
    static::$count++;
}

public function getName()
{
    return $this->name;
}

public static function showCount()
{
    echo static::$count;
}
}

