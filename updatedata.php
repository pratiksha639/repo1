<?php
  $stu_name=$_POST['sname'];
  $stu_address=$_POST['saddress'];
  $stu_sphone=$_POST['sphone'];
  $stu_id=$_POST['sid'];
$conn = mysqli_connect("localhost:3308","root","","crud")or die("connection failed");
$sql="UPDATE student SET sname='{$stu_name}', saddress='{$stu_address}',
sphone='{$stu_sphone}' WHERE sid = {$stu_id}";
 $result=mysqli_query($conn,$sql)or die ("unsuccessful") ;

 //header("Location: http://localhost/crud/index.php");
 mysqli_close($conn);
?>
