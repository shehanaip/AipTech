<?php
session_start();

// Database connection setup
if (isset($_POST['submit'])) {
    $name = $_POST['username']; 
    $password = $_POST['password'];
    $conn = mysqli_connect('localhost', 'root', '', 'aip_tech');
  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Validate against database
    $sql = "SELECT id, name FROM admin WHERE name='$name' AND password='$password'";
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) == 1) {
      // $row = $result->fetch_assoc();
      session_start();
      $_SESSION['user_id'] = $_POST['password'];
      header("Location: index.php"); 
      exit(); 
      // echo "you are now loged in enjoy in my project for diit-8 ";
  } else {
      echo "Login failed. Please check your username and password.";
  }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" href="icons/logo.png"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Noto+Sans:wght@300&family=Potta+One&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Admin Login</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="../css/login.css">
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header >Admin Login</header>
      <form action="login.php" method="POST">
      <input type="text"name="username" placeholder="Enter your name" required="required" >
        <input type="password" name="password" placeholder="Enter your password"required="required" >
        <!-- <a href="#">Forgot password?</a><br><br> -->
        <div class="d-flex justify-content-center">
             <button  type="submit" name="submit"
              class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Admin Login</button>
                </div><br>
      </form>
    
    </div>
  </div>
</body>
</html>
