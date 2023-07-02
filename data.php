
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="style.css">
</head>
<body class="bodyimg">
  <h1>  Welcome  AND Thanks for contact Us</h1>   
</body>
</html>

<?php
$host="localhost";
$user="root";
$pass="";
$db="mypotfolio";
$conn= mysqli_connect($host,$user,$pass,$db);
if(!$conn){
     die("not connected due to this error". mysqli_error_connet($conn));
}
// else{
// echo "Successfully connected<br>";
// }

$sql1 = "CREATE TABLE `mytable` (
     `Sno` INT(5) AUTO_INCREMENT PRIMARY KEY,
     `Name` VARCHAR(255) NOT NULL,
     `Email` VARCHAR(255) NOT NULL,
     `Contactno` BIGINT(10) NOT NULL,
     `Subject` VARCHAR(70) NOT NULL,
     `Comment` VARCHAR(255),
     `Timestamp` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 )";
$result=mysqli_query($conn,$sql1);
if($result)
// {
//      echo "table create successfully<br>";
// }  else
{
     echo "table was not create successfully<br>".mysqli_error($conn);
}
$name=$_POST['name'];
$email=$_POST['email'];
$cont=$_POST['number'];
$sub=$_POST['subject'];
$comment=$_POST['comment'];

$sql="INSERT INTO  `mytable` (`Name`,`Email`,`Contactno`,`Subject`,`Comment`)
VALUES('$name','$email','$cont','$sub','$comment')";
$result=mysqli_query($conn,$sql);
if($result){
     echo "<h1 style= color:aqua; > Hello   $name Your Details has been recorded  successfully</h1><br>";
}
else{
     echo " Hello $name Your Details has not been recorded  successfully<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>

