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
     echo 'database selected <br>' ;
 }
  $date = $_POST['dt'];
  $Name = $_POST['name'];
  $Gender = $_POST['rd1'];
  $Address=$_POST['txt'];
  $Class=$_POST['cls'];
  $Dept=$_POST['dpt'];
  $Roll=$_POST['rno'];
  $DOB=$_POST['dob'];
  $Age=$_POST['age'];
  $Duration=$_POST['drt'];
  $Location=$_POST['from'];

  $sql="INSERT INTO metro (date,name,gender,address,class,dept,roll,dob,age,duration,location) VALUES ('$date','$Name','$Gender','$Address','$Class','$Dept','$Roll','$DOB','$Age','$Duration','$Location')";


  if(!mysqli_query($con,$sql))
  {
      echo 'not inserted';
  }
  else{


      echo 'inserted';
  }

  header("refresh:10;url=index.html");



?>