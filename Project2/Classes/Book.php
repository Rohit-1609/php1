<?php


class Book extends Item2
{

    public $author;

    public function getListingDescription()
    {
    //    return $this->name . " by " .$this->author;
        return parent::getListingDescription() . " by " .$this->author;
    }

    public function getcode()
    {
       return  $this->code;
    }
   

   
} 