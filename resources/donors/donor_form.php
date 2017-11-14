<?php
session_start();
require ('../config/connect.php');
$first_name = $_SESSION['first_name'];
$last_name = $_SESSION['last_name'];
$email =$_SESSION['email'];
$city = $mysqli->escape_string($_POST['city']);
$blood_group = $mysqli->escape_string($_POST['bgroup']);
$contact=$_POST['contact'];
$weight =($_POST['weight']);
$frequency = $mysqli->escape_string($_POST['frequent']);
$address = $mysqli->escape_string($_POST['address']);
$last=$_POST['last'];
$dob=$_POST['dob'];
$sql = "INSERT INTO donor (first_name, last_name, email,city,address,blood_group,contact ,frequency, last, weight ,dob) VALUES ('$first_name', '$last_name', '$email', '$city', '$address','$blood_group', '$contact' ,'$frequency', $'last','$weight' ,'$dob')";
$success=$connection->query($sql);
if ($success) {
echo "<script type= 'text/javascript'>alert('New record created successfully');
</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $connection->error."');</script>";
}


?>
<html>
<head>
<title>Congratulations</title></head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
body{
    text-align: center;
    color:brown;
}
p{
    font:italic bold 20px/50px Georgia, serif;
}
h1{
    font:italic bold 40px/80px Georgia, serif;
}
</style>
<body>
<h1>Congratulations you have successfully registerd as a donor</h1>
<p>You can help someone in protecting their life</p>
<img src="../../public/assets/img/b4.jpg">
<a href="../../public/main.php">Back to home</a>

</body>
</html>