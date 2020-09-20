<?php
include_once('connection.php');
$query="select * from states";
$result=mysqli_query($con,$query) or die(mysql_error());
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <title>fetching data</title>
    <style>
        body{
            background-color: whitesmoke;
        }
        table{
            margin: auto;
            text-align: center;
            table-layout: fixed;
        }
        table,tr,th,td{
      padding: 20px;
            color: black;
            border: 1px solid #080808;
            border-collapse: collapse;
            font-size: 18px;
            font-family: sans-serif;
        }
        </style>
    </head>
    <table>
        <tr><input type="button" id="btnclick" onclick="clickEvent();" value="CITIES INFO OF BELOW STATES" style="color:red; font-size:20px;" ;></tr>
    <tr> <th style="width:1495px; height:25px;" colspan="6" style="background-color:white";><h2 style="float:none;" >Ovierview</h2></th>
        </tr>
        <t>
            <th>states</th>
            <th>newcase</th>
            <th>prevcase</th>
            <th>total</th>
            <th>deaths</th>
            <th>discharge</th>
        </t>
        <?php
        while($rows=mysqli_fetch_assoc($result))
        {
            ?>
        <tr>
        <td><?php echo $rows['statename']?></td>
            <td><?php echo $rows['new_case']?></td>
            <td><?php echo $rows['prev_case']?></td>
            <td><?php echo $rows['total']?></td>
            <td><?php echo $rows['deaths']?></td>
            <td><?php echo $rows['discharge']?></td>
        </tr>
        <?php     
        }
       ?>
<script type="text/javascript">
    function clickEvent()
    {
    window.location="http://localhost/cov-19/city.php"
    }</script>
    
    </table>
</html>