<?php
include_once('connection.php');
$query='select * from city';
$result=mysqli_query($con,$query) or die(mysqli_error());
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>DATA FETCH</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
<style>
    body{
        background-color:darkseagreen;
    }
    table{
        margin: auto;
        text-align: center;
        table-layout: auto;
    }    
    table,tr,th,td{
    padding: 20px;
    border: 1px solid black;
        border-collapse: collapse;
        font-size: 20px;
        font-family:cursive;
    </style>
    </head>
    <table>
        <tr><th style="width:1495px; height:25px;" colspan="7" style="background-color:white";><h2 style="float:none;" >City Ovierview</h2></th></tr>
        <t>
            <th>StateName</th>
            <th>Cityname</th>
            <th>Newcase</th>
            <th>Oldcase</th>
            <th>Total</th>
            <th>Deaths</th>
            <th>Discharge</th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
            ?>
        <tr>
         <td><?php echo $rows['states_name']?></td> 
            <td><?php echo $rows['cityname']?></td>
            <td><?php echo $rows['newcase']?></td>
            <td><?php echo $rows['oldcase']?></td>
            <td><?php echo $rows['Total']?></td>
            <td><?php echo $rows['Deaths']?></td>
            <td><?php echo $rows['Discharge']?></td>
        </tr>
        
        <?php }?>
    </table>
</html>