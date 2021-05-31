
<?php
 require "header.php";
require 'db.php';


        if(isset($_POST["submit_data"])){
           

           $username = $_POST["username"];
           $blogtitle = $_POST["blogtitle"];
           $postcontent = $_POST["postcontent"];

             $customername = $_POST["customername"];
           $customerID = $_POST["customerID"];

           //echo "hello " . $username . " you  drop a post on" . $blogtitle ;

            $sql = "INSERT INTO `article` (username, title, content, customername, customerID) VALUES ('$username', '$blogtitle', '$postcontent', '$customername', '$customerID')";

          $query = mysqli_query($con, $sql);

          if($query){
            echo " <span class='alert alert-success'> Your post has successfully been inserted  </span> ";

            
          }

         }
   require "footer.php";
?>