<?php
require ('../config/connect.php');
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in to view your profile!";
  header("location:../user_registration/error.php");
}

?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" text="text/css" href="../../public/assets/css/form1.css">
  <title>Welcome to your profile</title>
</head>
<body>
    <h1>Please enter the given information :</h1>
    <div id="form">
    <form name="dform" method="post" action="edit.php">
        <label><b>First Name</b></label>
        <input type="text" placeholder="Enter Name" name="fname" required><br>
<label><b>Last Name</b></label>
      <input type="text" placeholder="Enter Name" name="lname" required><br>

      <label><b>Email   </b></label>
      <input type="text" placeholder="Enter Email" name="email" required><br>
<label><b>Date of birth</b></label>
<input type="date" placeholder="" name="dob"/><br><br>
 <button type="submit" >Submit</button>
    </form>
  </div>
    </body>
</html>
