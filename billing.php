<?php
include "config.php";

$message = ''; // Initialize an empty message variable

if (isset($_POST["submit"])) {
    // Sanitize and validate inputs to prevent SQL injection
    $id = mysqli_real_escape_string($connection, $_POST["id"]);
    $name = mysqli_real_escape_string($connection, $_POST["name"]);
    $date = mysqli_real_escape_string($connection, $_POST["date"]);
    $amount = mysqli_real_escape_string($connection, $_POST["amount"]);

    // Ensure date is in proper format (YYYY-MM-DD)
    $dateFormat = "Y-m-d"; // Date format expected from the HTML input
    $dateObj = DateTime::createFromFormat($dateFormat, $date);

    // Check if the date is valid
    if (!$dateObj || $dateObj->format($dateFormat) !== $date) {
        $message = "Invalid date format. Use YYYY-MM-DD."; // Store error message
    } else {
        // Insert data into the billing table
        $ins = "INSERT INTO billing (id, name, date, amount) VALUES ('$id', '$name', '$date', '$amount')";
        $query1 = mysqli_query($connection, $ins);

        if ($query1) {
            $message = "Billing record added successfully."; // Success message
        } else {
            $message = "Error: " . mysqli_error($connection); // Error message
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Gym Management System</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="billing.php">Billing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="coach.php">Coach</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="members.php">Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="receptionist.php">Receptionist</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Billing Form -->
<div class="container mt-5">
    <h2>Billing Form</h2>
    <form method="POST" action="">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="memberId">Member ID</label>
                <input type="text" name="id" class="form-control" id="memberId" placeholder="ID" required>
            </div>
            <div class="form-group col-md-6">
                <label for="memberName">Member Name</label>
                <input type="text" name="name" class="form-control" id="memberName" placeholder="Name" required>
            </div>
        </div>
        <div class="form-group">
            <label for="billingDate">Billing Date (YYYY-MM-DD)</label>
            <input type="date" name="date" class="form-control" id="billingDate" required>
        </div>
        <div class="form-group">
            <label for="amount">Amount</label>
            <input type="number" name="amount" class="form-control" id="amount" placeholder="Amount" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
    </form>

    <!-- Display Success/Failure Message -->
    <div class="mt-3">
        <?php if ($message): ?>
            <div class="alert alert-info"><?php echo $message; ?></div>
        <?php endif; ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxWvSaXrS2A7aNJpS9F6EgGfoSfaXaWoCirpF7y2T" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
