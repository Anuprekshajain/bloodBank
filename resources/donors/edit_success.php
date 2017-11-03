<?php
session_start();

require("../config/connect.php");
$email = $mysqli->escape_string($_POST['email']);
$city = $mysqli->escape_string($_POST['city']);
$blood_group = $mysqli->escape_string($_POST['bgroup']);
$contact=$_POST['contact'];
$weight =($_POST['weight']);
$address = $mysqli->escape_string($_POST['address']);
$last=$mysqli->escape_string($_POST['last']);
$sql1="UPDATE donor set email='".$email."' , city='".$city."' , contact='".$contact."' , weight='".$weight."' , address='".$address."' , last='".$last."' where id='".$_SESSION['id']."'";
$success1=$connection->query($sql1);
if ($success1) {
echo "<script type= 'text/javascript'>alert('Record edited successfully');
</script>";

} else {
echo "<script type= 'text/javascript'>alert('Error: " . "<br>" . $connection->error."');</script>";
}
//header("location: ../../public/main.html");

?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" text="text/css" href="../../public/assets/css/edit_success.css">
  <title>Congratulations!</title>
<body>
    <h1><u>Your profile is updated successfully</u></h1>
    <p>Thanks for being an active user</p>
    <img src="../../public/assets/img/b21.jpg"><br>
    <a href="../../public/main.html">Back to home</a>
</body>
</html>