
<?php
 require "header.php";
 require 'db.php';
  require 'action.php';
 ?>




<table class="table table-condensed">
  <tr>
  <td >ID</td>
  <td >USERNAME</td>
  <td >TITLE</td>
  <td >CUSTOMER NAME</td>
  <td>CUSTOMER ID</td>
   <td><button class="btn btn-primary"> EDIT </button>   <button class="btn btn-danger"> DELETE </button></td>
</tr>


   <?php 

                $sql = "SELECT * FROM `article`"; 

                $result = $con->query($sql);

                if ($result->num_rows > 0) {

                  while($row = $result->fetch_assoc()) {

                 ?>
 <tr>
  <td ><?php echo $row['ID']  ?></td>
  <td ><?php echo $row['username']  ?></td>
  <td ><?php echo $row['title']  ?></td>
  <td ><?php echo $row['customername']  ?></td>
  <td>C<?php echo $row['customerID']  ?></td>
   <td><button class="btn btn-primary"> <a href="control-panel.php?edit=<?php echo $row['id']  ?>" style="color:snow">  EDIT </a> </button>   <button class="btn btn-danger"> DELETE </button></td>
</tr>



     <?php   } } ?>


</table>










 <?php
 require "footer.php";
 ?>