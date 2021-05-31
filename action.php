<?php

include 'db.php'; 

class dataOperation extends database{

  // insert into table (`id`,`name`, `user`) values (null,'de', 'df');
   
   public function insert_record($table, $field){
$sql = 
      $sql .= "INSERT INTO ". $table;
      $sql .= "(`id`, `". implode("`,`", array_keys($field)) . "`)";
      $sql .= "VALUES (null, '". implode("', '", array_values($field)) ."')";

      echo $sql;

    $query = mysqli_query($this->con, $sql);

    if($query){
     return true;
    }

   }

public function fetch_record($table){



$sql = "SELECT * FROM ".$table;

    $query = mysqli_query($this->con, $sql);
$array = array();
    while ($row = mysqli_fetch_assoc($query)) {
      $array[] = $row;
    }
return $array; 


}

public function select_record($table, $where){

  $sql = "";
  $condition = "";

foreach ($where as $key => $value) {
   $condition .= $key ."='". $value . "' AND ";
}



$condition = substr($condition,0, -5);

$sql ="SELECT * FROM " .$table . "WHERE " .$condition;
    
 $query = mysqli_query($this->con, $sql);

$row = mysqli_fetch_array($query);

return $row;

  }

  public function update_record($table, $field, $where){

    foreach ($where as $key => $value) {
       $condition = $key ."='". $value . "'";
    }

    foreach ($field as $key => $value) {
       $colum_field_value = $key ." = '". $value . "'";
    }

    

    $sql = "UPDATE " . $table;
    $sql .= "SET " . $colum_field_value . " WHERE " . $condition;
  //echo $sql;
    
 $query = mysqli_query($this->con, $sql);

    

  }

  public function delete_record($table, $where){

      foreach ($where as $key => $value) {
       $condition = $key ."='". $value ."'";
      }

      $sql = "DELETE FROM " .$table . " WHERE " . $condition;

      $query = mysqli_query($this->con, $sql);

      if($query){
        return true;
      }
  }

}

  $obj = new dataOperation;

  if(isset($_GET['delete'])){

      $where = array("id" => $_GET['delete']);

      if($obj->delete_record("`NPC_CALABAR`", $where)){
        header("Location:index.php?msg=Record deleted");
      }

  }


  if(isset($_POST['btn_add_product'])){
   
   $column_values_var = array(

    "child_name" => $_POST['child_name'],
    "remark" => $_POST['remark'],
    "father_name" => $_POST['father_name'],
    "State_of_origin" => $_POST['State_of_origin'],
    "place_of_origin" => $_POST['place_of_origin'],
    "mother_name" => $_POST['mother_name'],
    "place_of_birth" => $_POST['place_of_birth'],
    "child_height" => $_POST['child_height'],
    "date" => $_POST['date']
    
   );
if($obj->insert_record("`NPC_CALABAR`", $column_values_var)){
   header("Location:index.php?msg=Record successfully inserted");
}

  } 

  if(isset($_POST['btn_edit_product'])){

    $where = array("id" => $_POST['id']);

  $column_values_var = array(

    "child_name" => $_POST['child_name'],
    "remark" => $_POST['remark'],
    "father_name" => $_POST['father_name'],
    "State_of_origin" => $_POST['State_of_origin'],
    "place_of_origin" => $_POST['place_of_origin'],
    "mother_name" => $_POST['mother_name'],
    "place_of_birth" => $_POST['place_of_birth'],
    "child_height" => $_POST['child_height'],
    "date" => $_POST['date']



   );


$obj->update_record("`NPC_CALABAR`", $column_values_var, $where);

  }

  $row_fetch_all_records = $obj->fetch_record("`NPC_CALABAR`");

  ?>