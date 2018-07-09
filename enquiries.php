<?php
include_once 'dbcon.php';

if(isset($_POST['enquire'])){
  $name= $_POST['name'];
  $email=$_POST['email'];
  $message=$_POST['message'];

//inserting values to database
$query=mysqli_query($conn,"INSERT INTO enquiry(name,email,message)VALUES('$name','$email','$message')");
}else{
  echo "<script type='text/javascript'>
              alert('Error in sending message!');
         </script>";
}