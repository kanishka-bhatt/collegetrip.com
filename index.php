<?php
$insert=false;
if(isset($_POST['name'])){

$server="localhost";
$username="root";
$password="";

$con= mysqli_connect($server,$username,$password);

if(!$con){
    die("connection to this database failed due to".
    mysqli_connect_error());
}
//echo"success connecting to the db";

$name=$_POST['name'];
$gender=$_POST['gender'];
$branch=$_POST['branch'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];


$sql="INSERT INTO `college_trip`.`college_trip` ( `name`, `gender`, `branch`,
 `email`,`phone`, `other`, `date`) VALUES ( '$name', '$gender', '$branch',
  '$email', '$phone', 
 '$desc', current_timestamp())";
 //echo $sql;

 //EXECUTE the query
 if ($con->query($sql)==true) {
    //flag for successful insertion
    $insert= true;
 }
 else {
    echo "ERROR: $sql<br> $con->error";

 }
 //close the database connection
 $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alkatra:wght@700&display=swap" rel="stylesheet">
<i class="fa-solid fa-square-g"></i>    
</head>
<body>
<image>
    <img class="bg" src="image.jpg" alt="GOVERNMENT POLYTECHNIC DEHRADUN" >
    <div class="container">
        <h3 class="head1">WELCOME TO GPD US TRIP FORM</h3><br>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
      <?php
      if ($insert==true) {
       
      echo " <p class='submitMsg'>Thanks for submitting your form<br>We are happy to see you joining</p><br>";
      }
      ?>
        <form action="index.php" method="post">
         
         <input type="text" name="name" id="name" 
            placeholder="Enter your name">
           <br>
           
           <input type="text" name="gender" id="gender" 
           placeholder="Enter your gender">
          <br>
          <input type="text" name="branch" id="branch" 
            placeholder="Enter your branch">
           <br>

            <input type="email" name="email" id="email" 
            placeholder="Enter your email">
        
             <input type="phone" name="phone" id="phone" 
            placeholder="Enter your phone number">
            <br>
            <textarea name ="desc" id="desc" cols="30" row="10"
            placeholder="Enter any other information here"></textarea>
           
            <button class="btn">Submit</button>
        

<script src ="index.js">


</body>
</html>