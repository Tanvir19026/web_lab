<?php
$name=$_POST['name'];
$address=$_POST['address'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$zipcode=$_POST['zipcode'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];
$department=$_POST['department'];


$conn = new mysqli('localhost','root','','users_info');

if($conn -> connect_error)
{
 die('connection failed'.$conn -> connect_error);

}
else
{
$stmt = $conn -> prepare("insert into tbl_user(name,address,email,gender,zipcode,mobile,department) value(?,?,?,?,?,?,?)");
$stmt -> bind_param('ssssiis',$name,$address,$email,$gender,$zipcode,$mobile,$department);
$stmt -> execute();
echo ("Registration complete");
$stmt -> close();

}

   

?>


