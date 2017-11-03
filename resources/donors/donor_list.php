<html>
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" text="text/css" href="../../public/assets/css/donor_list.css">
   </head>
<body>

<?php
require ('../config/connect.php');

$rowcount=0;
$sql="SELECT * from donor ORDER by last DESC";
$query=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
if($row==null){
    printf("Sorry!No available donors");
}
else{

    echo "<h1>Available donors are:</h1>";

    do{

if($rowcount==0){
echo '<div class="row">';
$rowcount++;}
echo '<div class="col-sm-4">';
echo '<div class="card">';
echo '<div class="blood">';
echo $row["blood_group"]."<br>";
echo "</div>";
echo "Name: ".$row['first_name']." ".$row["last_name"]."<br>";
echo "Email id: ".$row["email"]."<br>";
echo "Contact Number: ".$row["contact"]."<br>";
echo "Address:".$row["address"]."<br>";
if($row["frequency"]==1){
    echo "Last donated:Yet to donate"."<br>";
}else{
echo "Last donated:".$row["last"]."<br>";
}
echo "</div>";
echo "<br>";
echo "</div>";
if($rowcount==3){
echo "</div>";}
}while($row=mysqli_fetch_array($query,MYSQLI_ASSOC));

}
?>
</body>
</html>