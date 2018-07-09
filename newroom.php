<?php
include_once 'dbcon.php';

if(isset($_POST)){
  $size= $_POST['size'];
  $luxury=$_POST['luxury'];
  $type=$_POST['type'];
  $image=$_FILES['image']['name'];
 $target="images/".basename($_FILES['image']['name']);
 $price=$_POST['price'];
   $query=mysqli_query($conn,"INSERT INTO rooms(size,luxury,type,image,price)VALUES('$size','$luxury','$type','$image','$price')")or die (mysqli_error());
   header("location: addroom.php");

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