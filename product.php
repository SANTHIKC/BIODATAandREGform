<?php
include 'connect.php';
if(isset($_POST['sub']))
{
 $name=$_POST['name'];
 $expdate=$_POST['exp'];
 $price=$_POST['pri'];
 $qui=$_POST['qui'];
 

 mysqli_query($con,"insert into product(product_name,exp_date,price,quantity)values('$name','$expdate','$price','$qui')");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            padding: 40px;
            border:1px solid black;
            text-align:justify;
        }
        
    </style>
</head>
<body>
    <h1> <center> <u>PRODUCT TABLE</u> </center></h1>
    <form method ="POST">
    <center><table>
        
        <tr>
            <th>  PRODUCT NAME      :</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th> Exp date     :</th>
            <td><input type="date" name="exp"></td>
        </tr>
        <tr>
            <th>PRICE  :</th>
            <td><input type="text" name="pri"></td>
        </tr>
        <tr>
            <th>Quantity  :</th>
            <td><input type="text" name="qui"></td>
        </tr>
        <tr>
            <td colspan="2"><center><button name ="sub">submit</button></center></td>
            
    </tr>
 </table></center>
    </form>
</body>
</html>