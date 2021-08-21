<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="createuser.css">
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('User created!');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="index.php">SPARKS BANK</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="createuser.php">Create User</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="transfermoney.php">Transfer Money</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="transactionhistory.php">Transaction History</a>
                </li>
            </div>
         </nav>
        <div class="wrapper">
        <div class="main">
            <h1>Create User</h1>
            <form method="POST">
                <p><input type="email" name="email" placeholder="Enter Email" class="intpt" required></p>
                <p><input type="text"  name="name" placeholder="Enter Name" class="intpt" required></p>
                <p><input type="number" name="balance" placeholder="Enter Balance" class="intpt" required></p>
                <div class="bott">
                    <p><input type="submit" name="submit" value="CREATE" class="btn f1"></p>
                    <p><input type="reset" name="reset" value="RESET" class="btn fr"></p>
                </div>
            </form>
        </div>
        </div> 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>