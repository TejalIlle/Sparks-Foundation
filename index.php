<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">


</head>
<body>
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
  
      <div class="container-fluid">
        <!-- Introduction section -->
              <div class="row intro py-1">
                <div class="col-sm-12 col-md">
                  <div class="heading text-center my-5">
                    <h3>Welcome to</h3>
                    <h1>SPARKS BANK</h1>
                  </div>
                </div>
                <div class="col-sm-12 col-md img text-center">
                  <img src="img/bank.png" class="img-fluid pt-2">
                </div>
              </div>
            </div>

            <div class="row activity text-center">
                <div class="col-md act">
                  <img src="img/user.jpg" class="img-fluid">
                  <br>
                  <a href="createuser.php"><button>Create a User</button></a>
                </div>
                <div class="col-md act">
                  <img src="img/transfer.jpg" class="img-fluid">
                  <br>
                  <a href="transfermoney.php"><button>Make a Transaction</button></a>
                </div>
                <div class="col-md act">
                  <img src="img/history.jpg" class="img-fluid">
                  <br>
                  <a href="transactionhistory.php"><button>Transaction History</button></a>
                </div>
          </div>
    </div>
              <footer class="text-center mt-5 py-2">
                <p>&copy 2021. Made by <b>Tejal Ille</b> <br> The Sparks Foundation</p>
              </footer>

              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>