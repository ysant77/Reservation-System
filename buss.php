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
  //$ID =  $_POST['iid'];
  $date = $_POST['dt1'];
  $Name = $_POST['name1'];
  $Gender = $_POST['rd1'];
  $Address=$_POST['txt1'];
  $Class=$_POST['cls1'];
  $Dept=$_POST['dpt1'];
  $Roll=$_POST['rno1'];
  $DOB=$_POST['dob1'];
  $Age=$_POST['age1'];
  $Duration=$_POST['drt1'];
  $Location=$_POST['from1'];

  $sql="INSERT INTO bus (date,name,gender,address,class,department,rollno,DOB,age,duration,location) VALUES ('$date','$Name','$Gender','$Address','$Class','$Dept','$Roll','$DOB','$Age','$Duration','$Location')";


  if(!mysqli_query($con,$sql))
  {
      echo 'not inserted';
  }
  else{


      echo 'inserted';
  }

  header("refresh:10;url=index.html");


?>