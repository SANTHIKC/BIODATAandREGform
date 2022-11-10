<?php
include 'connection.php';
if(isset($_POST['sub']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobile=$_POST['mob'];
 $user=$_POST['usr'];
 $password=$_POST['pass'];

 mysqli_query($con,"insert into registration_table(name,email,mobileno,user_name,password)values('$name','$email','$mobile','$user','$password')");
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
    <h1> <center> <u>REGISTRATION TABLE</u> </center></h1>
    <form method ="POST">
    <center><table>
        
        <tr>
            <th> NAME       :</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th> EMAIL       :</th>
            <td><input type="email" name="email" id=""></td>
        </tr>
        <tr>
            <th>Mobile No   :</th>
            <td><input type="text" name="mob"></td>
        </tr>
        <tr>
            <th>USER NAME   :</th>
            <td><input type="text" name="usr"></td>
        </tr>
        <tr>
            <th>PASSWORD    :</th>
            <td><input type="password" name="pass" id=""></td>
        </tr>
        <tr>
            <td colspan="2"><center><button name ="sub">submit</button></center></td>
            
    </tr>
 </table></center>
    </form>
</body>
</html>