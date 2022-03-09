<?php
 $stu_name=$_POST['sname'];
 $stu_address=$_POST['saddress'];
 $stu_class=$_POST['class'];
 $stu_sphone=$_POST['sphone'];
 
$conn =mysqli_connect("localhost:3308","root","","crud")or die("connection failed");
 $sql="INSERT INTO student (sname,saddress,sclass,sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}',
 '{$stu_sphone}')";
 $result=mysqli_query($conn,$sql) or die ("query unsuccessful");
 header("Location: http://localhost/crud/index.php");
 mysqli_close($conn);
?>