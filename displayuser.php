<?php
 include 'connect.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>DISPLAY USER</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" >
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class="container">    
          <button class="btn btn-primary my-5"><a class="text-light" href="index.php">Add user</a></button>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">User #</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
    
    $sql= "SELECT* FROM `adduser`";
    $result=mysqli_query($con,$sql);
    if($result){
    while( $row = mysqli_fetch_assoc($result)){
      $userid= $row['userid'];
      $name= $row['name'];
      $email= $row['email'];
      $password= $row['password'];
      echo '<tr>
        <th scope="row">'.$userid.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>
          <button class="btn btn-primary" ><a class="text-light" href="updateuser.php?updateuserid='.$userid.'">Update</a></button>
          <button  class="btn btn-danger"><a class="text-light" href="deleteuser.php?deleteuserid='.$userid.'">Delete</a></button>
        </td>
      </tr>';
    }
   
     
    
  }

?>

  
  </tbody>
</table>
   
    </div>
      
    <script type="text/javascript" src="main.js"></script>
  </body>

</html>