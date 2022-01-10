<?php


class Item2
{
    CONST MAX_LENGTH=24;
    public $name;
    public $description;
    protected $code=123;
   public function getName()
    {
       return  $this->name;
    }
    
    public function setName($name)
    {
        $this->name=$name;
    }

    public function getDescription()
    {
       return $this->description;
    }
    
    public function setDescription($description)
    {
        $this->description=$description;
    }

    public function getListingDescription()
    {
        return "Item: " .$this->name;
    }

     


}