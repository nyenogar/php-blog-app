<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
    <div class="container mt-12">
                <br/> <br/> <br/>
    <form action="formsubmit.php" method="POST" enctype="multipart/form-data">


  <div class="form-group">
    <label for="">User Name</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter your name">
  </div>
  <div class="form-group">
    <label for="">Blog Title</label>
    <input type="text" name="blogtitle" class="form-control" placeholder="Blog Title">
  </div>

  <div class="form-group">
    <label for="">customername</label>
    <input type="text" name="customername" class="form-control" placeholder="customer name">
  </div>

  <div class="form-group">
    <label for="">customerID</label>
    <input type="text" name="customerID" class="form-control" placeholder="customer ID">
  </div>
  <!--<div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div> -->

   <div class="form-group">
    <label for="exampleInputPassword1">Post  Content</label>
   <textarea class="form-control" name="postcontent" id="" cols="30" rows="10"></textarea>
  </div>
 

  <button type="submit" name="submit_data" class="btn btn-primary">Make Post</button>


</form>
    </div>
</body>

</html>