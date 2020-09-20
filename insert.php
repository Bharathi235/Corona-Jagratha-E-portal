<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="stylesheet.css" />
</head>
<body>
     <style>
         body{
             background-image: url(n.jpg);
             background-size: auto;
             background-position: center; 
             height: 100vh;
         }
    </style>
<?php
require('connection.php');
    if(isset($_POST['id'])){
 $id=$_POST['id'];       
$name=$_POST['statename'];
$new=$_POST['new_case'];
$oldcase=$_POST['prev_case'];
$Total=$_POST['total'];
$died=$_POST['deaths'];
$discge=$_POST['discharge'];
  $query = "INSERT INTO `bharathi`.`states` (`id`, `statename`, `new_case`, `prev_case`, `total`, `deaths`, `discharge`)
VALUES ('$id',$name', '$new', '$oldcase', '$Total','$died','$discge')";
        $result = mysqli_query($con,$query);
        if($result){
            ?>
    <script>alert("success");</script>
    <?php 
        }
    }
?>
    <div class="box5">
    <h1 style="text-align: center; font-size: 25px;color:whitesmoke;"> INSERTION </h1>
<div class="form">
<form name="registration" action="" method="post" enctype="multipart/form-data">
    <input type="text" name="id" placeholder="id" required />
<input type="text" name="statename" placeholder="statename" required />
<input type="text" name="new_case" placeholder="new_case" required />
<input type="text" name="prev_case" placeholder="prev_case" required />
<input type="text" name="total" placeholder="total" required />
<input type="text" name="deaths" placeholder="deaths" required />
<input type="text" name="discharge" placeholder="discharge" required />
<input type="submit" name="submit" value="INSERT" />
</form>
</div>
    </div>
</body>
</html>
