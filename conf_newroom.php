<?php
include_once 'dbcon.php';

if(isset($_POST)){
  $stylec= $_POST['stylec'];
  $capacity=$_POST['capacity'];
  $image=$_FILES['image']['name'];
   $target="images/".basename($_FILES['image']['name']);
    $price=$_POST['price'];

   $query=mysqli_query($conn,"INSERT INTO conf_rooms(stylec,capacity,image,price)VALUES('$stylec','$capacity',
    '$image','$price')")or die (mysqli_error());
   header("location: conf_addroom.php");

   if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
   	echo "<script type='text/javascript'>
              alert('Successfully added image');
         </script>";
   }else{
   	echo "<script type='text/javascript'>
              alert('Not added');
         </script>";
   }

}
//



// include_once 'footer.php';

?>