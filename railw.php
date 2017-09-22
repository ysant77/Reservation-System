<?php
$con=mysqli_connect('localhost','root','') ;
 if(!$con)
 {
     echo 'not connected to server'  ;
 }
 else
 {
     echo 'connection sucessful <br>';
 }
 if(!mysqli_select_db($con, 'ace'))
 {
     echo 'database not selected';
 }
 else
 {
     echo 'database selected <br>';
 }

  $date = $_POST['dte'];
  $Name = $_POST['fname'];
  $Gender = $_POST['rd'];
  $Address=$_POST['addr'];
  $Class=$_POST['clas'];
  $Dept=$_POST['dept'];
  $Roll=$_POST['rono'];
  $DOB=$_POST['dtbr'];
  $Age=$_POST['ag'];
  $class1=$_POST['class'];
  $Duration=$_POST['durt'];
  $Location=$_POST['from1'];

  $sql="INSERT INTO rail (date,Name,Gender,Address,Class,Department,Rollno,DOB,Age,class1,Duration,Location) VALUES ('$date','$Name','$Gender','$Address','$Class','$Dept','$Roll','$DOB','$Age','$class1','$Duration','$Location')";


  if(!mysqli_query($con,$sql))
  {
      echo 'not inserted';
  }
  else{


      echo 'inserted';
  }

  header("refresh:10;url=index.html");



?>