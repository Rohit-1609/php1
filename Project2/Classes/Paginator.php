<?php

class Paginator 
{
    public $limit;
    public $offset;

    public $next;
    public $previous;


    public function __construct($page, $records_per_page,$total_records)
    {
        $this->limit = $records_per_page;


        var_dump($page);
      

        $page = filter_var($page, FILTER_VALIDATE_INT, [
            'options' => ['default' =>1]
        ]
        
    ) ;

        var_dump($page);

        if($page > 1)
        {
        $this->previous=$page-1;
        }


        
         $total_pages =ceil($total_records / $records_per_page);
         var_dump($total_pages);


         if($page< $total_pages)
         {
             $this->next = $page +1;
         }


       

        $this->offset= $records_per_page * ($page-1 );
    }
}



?>