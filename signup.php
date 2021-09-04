<?php
include 'dbconnect.php';

 if(isset($_POST['signup'])){
      
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $message = $_POST['message'];

      // now insert data into table using sql insert query 

       $sql = "INSERT INTO `testtable` (`id`, `name`, `email`, `password`, `message`, `date and time`) VALUES (NULL, '$username', '$email', '$password', '$message', current_timestamp());";

      //  mysqli_query takes two parameter $con $sql query

       $result = mysqli_query($connect,$sql);

      //  check data inserted into table or not 
       if($result){
            echo '<script>alert("data successfully inserted")</script>';
       }else{
            echo '<script>alert("data not inserted")</script>';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Signup</title>
  </head>
  <body>
    <h1 class="text-center my-4 text-capitalize">signup to our website</h1>

    <div class="container">
          <form action="signup.php" method="post">
                <input type="text" name="username" placeholder="Enter your Name..." class="form-control my-3" required>
                <input type="email" name="email" placeholder="Enter your email..." class="form-control my-3" required>
                <input type="password" name="password" placeholder="Enter password..." class="form-control my-3" required>
                <textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
           <button class="btn btn-danger my-3" name="signup">Signup</button>
            </form>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>