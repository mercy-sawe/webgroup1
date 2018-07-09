<?php
session_start();
include_once 'dbcon.php';

$room_id = $_GET['room_id'];

if(isset($_SESSION['user_info'])) {

  $user = $_SESSION['user_info'];

  $addUserRoom = "insert into user_rooms(room_id, user_id) values ('$room_id', '$user')";

  mysqli_query($conn, $addUserRoom)or die (mysqli_error());

  // //updating status of room
  $updateRoomStatus = "UPDATE rooms SET status = '0' WHERE id='$room_id'";

  mysqli_query($conn, $updateRoomStatus)or die (mysqli_error());

  header("location: rooms.php");

}

if(isset($_POST)){
  $firstname= $_POST['firstname'];
  $lastname=$_POST['lastname'];
  $idnumber=$_POST['idnumber'];
  $phone= $_POST['phone'];
  $email=$_POST['email'];
  $checkin=$_POST['checkin'];
  $checkout= $_POST['checkout'];
  $roomnumber=$_POST['roomnumber'];
  $sizeroom=$_POST['sizeroom'];
  $typeroom= $_POST['typeroom'];

//inserting values to database

$query="INSERT INTO bookingdetails(firstname,lastname,idnumber,phone,email,checkin,checkout,roomnumber,sizeroom,typeroom)
	VALUES('$firstname','$lastname','$idnumber','$phone','$email','$checkin','$checkout','$roomnumber','$sizeroom','$typeroom')";
  $queryBook=mysqli_query($conn,$query);
}
/*
//changing room status
$query3="UPDATE rooms SET status='0' WHERE id='$id'";
}

if("SELECT * FROM rooms WHERE id='$id' AND status='1'"){
		mysqli_query($conn,$query);
		mysqli_query($conn,$query3);
		echo "<script type='text/javascript'>
              alert('Successfully booked');
         </script>";}else{
         	echo "<script type='text/javascript'>
              alert('Room is not available!');
         </script>";

         }*/
/*
//checking avalability of rooms
$query2=mysqli_query($conn,"SELECT * FROM singleroom WHERE size='$sizeroom' AND luxury='$typeroom' AND status='available'");
$query4=mysqli_query($conn,"SELECT * FROM doubleroom WHERE size='$sizeroom' AND luxury='$typeroom' AND status='available'");
$query5=mysqli_query($conn,"SELECT * FROM tripleroom WHERE size='$sizeroom' AND luxury='$typeroom' AND status='available'");
$query6=mysqli_query($conn,"SELECT * FROM quadroom WHERE size='$sizeroom' AND luxury='$typeroom' AND status='available'");

//updating status of room
$query3="UPDATE singleroom SET status='occupied' WHERE size='$sizeroom' AND luxury='$typeroom'";
$query7="UPDATE doubleroom SET status='occupied' WHERE size='$sizeroom' AND luxury='$typeroom'";
$query8="UPDATE tripleroom SET status='occupied' WHERE size='$sizeroom' AND luxury='$typeroom'";
$query9="UPDATE quadroom SET status='occupied' WHERE size='$sizeroom' AND luxury='$typeroom'";
}

if($roomnumber=='Single' && $query2==true){
		mysqli_query($conn,$query);
		mysqli_query($conn,$query3);
		echo "<script type='text/javascript'>
              alert('Successfully booked');
         </script>";
         
         
}else if ($roomnumber=='Double' && $query4==true){
		mysqli_query($conn,$query);
		mysqli_query($conn,$query7);
		echo "<script type='text/javascript'>
              alert('Successfully booked');
         </script>";
		
	}else if ($roomnumber=='Triple' && $query5==true){
		mysqli_query($conn,$query);
		mysqli_query($conn,$query8);
		echo "<script type='text/javascript'>
              alert('Successfully booked');
         </script>";
		
	}else if ($roomnumber=='Quad' && $query6==true){
		mysqli_query($conn,$query);
		mysqli_query($conn,$query9);
		echo "<script type='text/javascript'>
              alert('Successfully booked');
         </script>";
		
	}else{
		echo "<script type='text/javascript'>
              alert('Room is not available!');
         </script>";

	}	*/

?>