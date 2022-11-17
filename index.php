<?php
  include 'connect.php';
 
  if(isset($_POST['submit'])){

    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];

    
   $sql="INSERT INTO `adduser` (name,email,password) VALUES('$name','$email','$password')";
   $result=mysqli_query($con,$sql);

    if($result){
     //echo "Data inserted succesfully";
      header('location:displayuser.php');
    }else{
     echo "data not successfuly inserteed";
      die(mysqli_error($con));
    }   
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" >
     <link rel="stylesheet" href="styles.css">

    <title>ADD USER</title>
  </head>
  <body>
    <h1>Add Users</h1>
    <div class="container">
     <form method="post">
      <div class="mb-3">
          <label>Name</label>
          <input type="text" class="form-control" name="name" required>
      </div>
       <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" name="email" required>
      </div>
       <div class="mb-3">
          <label>Password</label>
          <input type="password" class="form-control" name="password" required>
      </div>
       <div class="mb-3">
          
          <input type="submit" class="btn btn-primary" value="Submit" name="submit">
      </div>
     </form>
    </div>

   

  
  </body>
</html>