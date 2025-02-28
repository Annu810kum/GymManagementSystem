<?php
include "config.php";

if (isset($_REQUEST["submit"])) {
    
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $date = $_REQUEST["date"];
    $address = $_REQUEST["address"];
    $phone = $_REQUEST["phone"];

    

    $ins = "INSERT INTO receptionist (id,name,date,address,phone) VALUES ('$id','$name','$date','$address','$phone')";
        $query1 = mysqli_query($connection, $ins);

}       
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Receptionist</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
</head>
<body>
    


<!-- nav bar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Gym Mananagement System</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="biling.php">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="coach.php">Coach</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="members.php">Members</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="receptionist.php">Receptionist</a>
      </li>
    </ul>
  </div>
</nav>
<!-- nav bar end     -->





<!-- form start -->
<div class="container mt-5">
    <h2>Receptionist Form</h2>
    <form method="POST" action="">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="ID">ID</label>
                <input type="text" name="ID" class="form-control" id="ID" placeholder="ID" required>
            </div>
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
            </div>
        </div>
        <div class="form-group">
            <label for="JoiningDate">Joining Date (YYYY-MM-DD)</label>
            <input type="date" name="date" class="form-control" id="JoiningDate" required>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="address" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" class="form-control" id="phone" placeholder="phone" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
    </form>
<!-- form end -->




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>