<?php
  include 'connect.php';

      $userid=$_GET['updateuserid'];

      $sql= "SELECT* FROM `adduser` where userid=$userid";
     
      $result=mysqli_query($con,$sql);

      $row=mysqli_fetch_assoc($result);
      $name= $row['name'];
      $email= $row['email'];
      $password= $row['password'];


  if(isset($_POST['update'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $password= $_POST['password'];

   $sql="UPDATE `adduser` SET userid='$userid', name='$name', email='$email', password='$password' WHERE userid='$userid'";

    $result=mysqli_query($con,$sql);

    if($result){
     //echo "update succesfully";
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
    <!--Ajax fonts icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
  
      .showPassword{
        position: relative;
      }
      .showPassword i{
        font-size: 24px;
        position: absolute;
        top: 50%;
        right:10px;
      }
      i:hover{
        color: red;
      }

    </style>

    <title>UPDATE USER</title>
  </head>
  <body>
    <h1>Update User</h1>
    <div class="container">
     <form method="post">
      <div class="mb-3">
          <label>Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo $name ?>" required>
      </div>
       <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" name="email" value="<?php echo $email ?>" required>
      </div>
       <div class="mb-3 showPassword">
          <label>Password</label>
          <input type="password" id="password"class="form-control" name="password" value="<?php echo $password;?>" required>
           <i class="far fa-eye" id="togglePassword"></i>
      </div>
       <div class="mb-3">
          
          <input type="submit" class="btn btn-primary" value="Update" name="update">
      </div>
     </form>
    </div>

   

  <script type="text/javascript" src="main.js"></script>
  </body>
</html>