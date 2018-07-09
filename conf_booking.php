<?php
session_start();
include_once 'dbcon.php';

$room_id = $_GET['room_id'];

if(isset($_SESSION['user_info'])) {

  $user = $_SESSION['user_info'];

  $addUserRoom = "insert into user_conf_rooms(room_id, user_id) values ('$room_id', '$user')";

  mysqli_query($conn, $addUserRoom)or die (mysqli_error());

  // //updating status of room
  $updateRoomStatus = "UPDATE conf_rooms SET status = '0' WHERE id='$room_id'";

  mysqli_query($conn, $updateRoomStatus)or die (mysqli_error());

  header("location: conf_rooms.php");

}