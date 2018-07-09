<?php
include_once 'dbcon.php';
include_once 'header.php';
?>
<style type="text/css">
.formbook{
margin-top: 80px;
}

body{
    background-image: url(images/singledeluxe.jpg);
    line-height: 1.4px;
    margin:0;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    }
    .bookbtn{
   background-color:var(--primary);
    color: var(--dark);
    padding: 0.7rem 1.5rem;
    text-decoration: none;
    border: 0;
}
.bookbtn:hover{
   background-color:var(--light);
  }
    #addr{
   background-color:var(--dark);
    color: var(--dark);
    padding: 0.7rem 1.5rem;
    text-decoration: none;
    border: 0;
    width: 150px;
}
#addr:hover{
   background-color:var(--light);
  }
  .btns{
  	background: rgba(255, 255, 255, 0.7);
  	margin-right: 500px;
  	margin-left: 500px;
  	margin-top: 50px;
  	padding: 25px;
  }

</style>
<div class="formbook">
<center><h2 style="font-family:Times New Roman; font-size: 50px; color: #ffffff; font-style: italic;">ADD ROOMS </h2></center>
<form method="post" action="newroom.php" name="bookform" enctype="multipart/form-data">
      <label>Number of rooms</label>
  <select style="height: 25px; width: 150px;" name="type">
    <option value="SINGLE">Single</option>
    <option value="DOUBLE">Double</option>
    <option  value="TRIPPLE">Tripple</option>
    <option value="QUAD">Quad</option>
  </select>
<br><br><br><br><br><br> 
    <label for="size">Size of room</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select id="size" name = "size" style="height: 25px; width: 150px;">
               <option value = "Standard">Standard</option>
               <option value = "Deluxe">Deluxe</option>
               <option value = "Joint">Joint</option>
               <option value = "Suite">Suite</option>
             </select>
<br><br><br><br><br><br> 
               <label>Type of room</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <select name = "luxury" style="height: 25px; width: 150px;">
               <option value = "Standard" id="Standard">Standard</option>
               <option value = "Deluxe">Deluxe</option>
               <option value = "Executive">Executive</option>
               <option value = "Presidential">Presidential</option>
             </select>
             <br><br><br><br><br><br>
             <label for="size">Room image</label>
             <input type="hidden" name="imgsize" value="1000000">
             <input type="file" name="image" style="height: 25px; width: 175px; margin-left: 25px;"> 
             <br><br><br><br><br><br>
             <br><br><br><br><br><br>
             <label for="price">Price</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <input type="text" name="price">
             <br><br><br><br><br><br>
             <button class="btn btn-primary " type="submit">Add Room</button>


</form>
</div>
<?php
include_once 'footer.php';
?>