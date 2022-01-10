<?php


class Holiday
{

    public $id;
    public $createdDate;
    public $updatedDate;
    public $holidayName;
    public $holidayDate;
    public $status;

   

    public $errors=[];

    public function validateHoliday()
    {
       
    
    if($this->holidayName=='')
    {
      $this->errors[]='Holiday Name is required';
    }
    
    if($this->holidayDate =='')
    {
        $data_time = date_create_from_format('Y-m-d ',$this->holidayDate);
        
        if($data_time===false)
        {
            $errors[]='Invalid date and time';
        }
        else
        {
            $date_errors=date_get_last_errors();
          // echo date_format($data_time, 'Y-m-d H:i:s');
         //   exit;
         if($date_errors['warning_count']>0)
         {
             $errors[]='Invalid date and time---';
         }
        }
    }
    return empty($this->errors);
    }




    
public function create($conn)
{
    if($this->validateHoliday())
    {
    $query1= "INSERT INTO holiday(holidayName,holidayDate)
        VALUES(:holidayName,:holidayDate)";  

     $stmt=$conn->prepare($query1);

     $stmt->bindValue(':holidayName',$this->holidayName, PDO::PARAM_STR);


     if($this->holidayDate =='')
     {
         $stmt->bindValue(':holidayDate',null,PDO::PARAM_NULL);
     }
     else 
     {
             $stmt->bindValue(':holidayDate' , $this->holidayDate, PDO::PARAM_STR);
     }
    if($stmt->execute())
    {
            $this->id = $conn->lastInsertId();
            return true;
     }
     }
    else 
    {
       return false;
    }
    }



    public function delete($conn)
{
    $query1= "DELETE FROM holiday WHERE id= :id";  

    $stmt=$conn->prepare($query1);

    $stmt->bindValue(':id',$this->id, PDO::PARAM_INT);
   
    return $stmt->execute();
}

public function deleteOne($conn)
{
    $query1= "DELETE FROM holiday WHERE id= :id and status=1";  

    $stmt=$conn->prepare($query1);

    $stmt->bindValue(':id',$this->id, PDO::PARAM_INT);
   
    return $stmt->execute();
}



public function update($conn)
{

    if($this->validateHoliday())
    {
    $query1= "UPDATE holiday 
    SET updateDate=:updateDate,holidayName=:holidayName,holidayDate=:holidayDate
     WHERE id=:id";  

     $stmt=$conn->prepare($query1);

     $stmt->bindValue(':id',$this->id, PDO::PARAM_INT);
    
     $stmt->bindValue(':holidayName',$this->holidayName, PDO::PARAM_STR);
     $stmt->bindValue(':updateDate',date('Y-m-d H:i:s'));
     
 
     if($this->holidayDate =='')
     {
         $stmt->bindValue(':holidayDate',null,PDO::PARAM_NULL);
     }
     else
      {
        $stmt->bindValue(':holidayDate' , $this->holidayDate, PDO::PARAM_STR);
     }
        if($stmt->execute())
    {
            $this->id = $conn->lastInsertId();
            return $this->id;
    
    }
     
}
    else 
    {
       return false;
    }
      
}
    

    


    public static function getAll($conn)
    {

         $query1="Select * from holiday;";

           $results= $conn->query($query1);


         return $results->fetchAll(PDO::FETCH_ASSOC);
    }
    


    public static function getById($conn, $id,$columns='*')
{
    $query2="select $columns From holiday where id=:id";

    $stmt= $conn->prepare($query2);
    $stmt->bindValue(':id',$id,PDO::PARAM_INT);

    $stmt->setFetchMode(PDO::FETCH_CLASS,'Holiday');

        if($stmt->execute())
        {
          return $stmt->fetch();
            
        }
    
}



}