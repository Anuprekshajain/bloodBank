<html>
<head>
    <title>Search donor</title>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" text="text/css" href="../../public/assets/css/fetch.css">
</head>

<body>
<?php
require ('../config/connect.php');
$rowcount =0;
$ublood=$_POST['bgroup'];
$ucity=$_POST['city'];
$sql="SELECT * from donor where city='".$ucity."' and blood_group='".$ublood."'";
$query=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
if(!$row){
    echo "<h1>Sorry!<br>No donors are available with required blood group in your city.</h1>";?>
    <div class="tags">
    <a href="donor_list.php">View recent donors</a><br><br>
    <a href="../../public/main.html">Back to home</a>
</div>
    <?php
}
else{

    echo "<h1>Available donors are:</h1>";
?>
<a href="../../public/main.html">Back to home<br></a><br>
<?php
    do{


echo '<div class="card" style="align:center">';
echo '<div class="blood">';
echo $row["blood_group"]."<br>";
echo "</div>";
echo "Name: ".$row['first_name']." ".$row["last_name"]."<br>";
echo "Email id: ".$row["email"]."<br>";
echo "Contact Number: ".$row["contact"]."<br>";
echo "Address:".$row["address"]."<br>";
echo "</div>";

}while($row=mysqli_fetch_array($query,MYSQLI_ASSOC));
}
?>

</body>
</html>