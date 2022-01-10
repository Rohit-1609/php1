<?php


class Article
{

    public $id;
    public $title;
    public $content;
    public $published_at;


    public static function getAll($conn)
    {

         $query1="Select * from article;";

           $results= $conn->query($query1);


         return $results->fetchAll(PDO::FETCH_ASSOC);
    }


  public static function getById($conn, $id,$columns='*')
{
    $query2="select $columns From article where id=:id";

    $stmt= $conn->prepare($query2);
    $stmt->bindValue(':id',$id,PDO::PARAM_INT);

    $stmt->setFetchMode(PDO::FETCH_CLASS,'Article');

        if($stmt->execute())
        {
          return $stmt->fetch();
            
        }
    
}

public function updateById($conn)
{
    $query1= "UPDATE article
     SET title=:title,content=:content, published_at=:published_at 
     WHERE id=:id";  

     $stmt=$conn->prepare($query1);

     $stmt->bindValue(':id',$this->id, PDO::PARAM_INT);
     $stmt->bindValue(':title',$this->title, PDO::PARAM_STR);
     $stmt->bindValue(':content',$this->content, PDO::PARAM_STR);

     if($this->published_at =='')
     {
         $stmt->bindValue(':published_at',null,PDO::PARAM_NULL);
     }
     else {
         {
             $stmt->bindValue(':published_at' , $this->published_at, PDO::PARAM_STR);
         }
         return $stmt->execute();
     }

    }
}