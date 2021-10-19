<?php
$servername="localhost";
$username="root";
$password="";
$dbname="aiub";

$conn = mysqli_connect($servername,$username,$password,$dbname);
          
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " 
        . mysqli_connect_error());
}
$fname =  $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$email =  $_REQUEST['email'];
$gender = $_REQUEST['gender'];
$mno = $_REQUEST['mno'];
$birthday = $_REQUEST['birthday'];
$hscresult = $_REQUEST['hscresult'];
$sscresult = $_REQUEST['sscresult'];
$course = $_REQUEST['course'];
$semester = $_REQUEST['semester'];

$sql="INSERT INTO new_students  VALUES('$fname','$lname',$email,'$gender','$mno','$birthday','$hscresult','$sscresult','$course','$semester',)";
if(mysqli_query($conn, $sql)){
    echo "data stored in a database successfully." ; 

} else{
    echo "Unseccesfull" ;
}
  
mysqli_close($conn);
?>