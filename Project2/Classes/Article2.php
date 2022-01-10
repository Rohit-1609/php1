<?php


class Article2
{

    public $id;
    public $title;
    public $content;
    public $published_at;
    public $errors=[];


    public function validateArticle()
    {
      
    
        if($this->title=='')
    {
      $this->errors[]='Title is required';
    }
    
    if($this->content =='')
    {
        $this->errors[]='Content is required';
    }
    
    if($this->published_at !='')
    {
        $data_time=date_create_from_format('Y-m-d H:i:s',$this->published_at);
        
        if($data_time===false)
        {
            $this->errors[]='Invalid date and time';
        }
        else
        {
            $date_errors=date_get_last_errors();
          // echo date_format($data_time, 'Y-m-d H:i:s');
         //   exit;
         if($date_errors['warning_count']>0)
         {
             $this->errors[]='Invalid date and time---';
         }
        }
    }
    return empty($this->errors);
    }


    
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

    $stmt->setFetchMode(PDO::FETCH_CLASS,'Article2');

        if($stmt->execute())
        {
          return $stmt->fetch();
            
        }
    
}

public function updateById($conn)
{
    if($this->validateArticle())
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
     else
      {
        $stmt->bindValue(':published_at' , $this->published_at, PDO::PARAM_STR);
         }
         return $stmt->execute();
        }
   else 
{
              return false; 
            }
      
    
    }


  

public function delete($conn)
{
    $query1= "DELETE FROM article WHERE id= :id";  

    $stmt=$conn->prepare($query1);

    $stmt->bindValue(':id',$this->id, PDO::PARAM_INT);
   
        return $stmt->execute();
}


public function create($conn)
{
    if($this->validateArticle())
    {
    $query1= "INSERT INTO article(title,content,published_at)
        VALUES(:title,:content,:published_at)";  

     $stmt=$conn->prepare($query1);

     $stmt->bindValue(':title',$this->title, PDO::PARAM_STR);
     $stmt->bindValue(':content',$this->content, PDO::PARAM_STR);

     if($this->published_at =='')
     {
         $stmt->bindValue(':published_at',null,PDO::PARAM_NULL);
     }
     else 
         {
             $stmt->bindValue(':published_at' , $this->published_at, PDO::PARAM_STR);
         }
        if($stmt->execute())
        {
            $this->id=$conn->lastInsertId();
            return true;
        }
     }
      else 
          {
              return false;
          }
      
    
    }

    public static function getPage($conn, $limit, $offset)
    {
        $sql= "Select * 
               FROM article 
               ORDER BY published_at
               LIMIT :limit 
               OFFSET :offset";

        $stmt=$conn->prepare($sql);

        $stmt->bindValue(":limit",$limit, PDO::PARAM_INT);
        $stmt->bindValue(":offset",$offset, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public static function getTotal($conn)
   {
     return  $conn->query('SELECT COUNT(*) FROM article')->fetchColumn();
   }


   public function setImageFile($conn,$filename)
   {
       $query1="UPDATE article SET image_file=:image_file
       WHERE id=:id";


$stmt = $conn ->prepare($query1);
$stmt->bindValue(':id',$this->id,PDO::PARAM_INT);
$stmt->bindValue('image_file',$filename,PDO::PARAM_STR);

return $stmt->execute();


}
} 