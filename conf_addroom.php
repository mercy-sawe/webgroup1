<?php
include_once 'dbcon.php';
include_once 'header.php';
?>
<style type="text/css">
.formbook{
margin-top: 80px;
}

body{
    background-image: url(images/c1.jpg);
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
<center><h2 style="font-family:Times New Roman; font-size: 50px; color: #ffffff; font-style: italic;">ADD CONFERENCE ROOMS </h2></center>
<form method="post" action="conf_newroom.php" name="bookform" enctype="multipart/form-data">

    <label for="stylec">Room style</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select id="stylec" name = "stylec" style="height: 25px; width: 150px;">
               <option value = "Stadium">Stadium</option>
               <option value = "Boardroom">Boardroom</option>
               <option value = "Theatre">Theatre</option>
             </select>
              <br><br><br><br><br><br> 
               <label>Capacity</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <select name = "capacity" style="height: 25px; width: 150px;">
               <option value = "14">14</option>
               <option value = "40">40</option>
               <option value = "200">200</option>
               <option value = "400">400</option>
             </select>
             <br><br><br><br><br><br>
             <label for="size">Room image</label>
             <input type="hidden" name="imgsize" value="1000000">
             <input type="file" name="image" style="height: 25px; width: 175px; margin-left: 25px;"> 
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