<?php
include_once 'dbcon.php';
include_once 'header.php';
?>
<style type="text/css">
.formbook{
margin-top: 80px;
}
/*#datepicker{
    width: 180px;
    margin:0 20px 20px 20px;
  }
  #datepicker>span:hover{
    cursor: pointer;
}    */
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

</style>
<div class="formbook" >
<center><h2 style="font-family: md script; font-size: 50px; color: #ffffff; font-style: italic;">Make your reservations </h2></center>
 <form name="bookform" method="POST" action="bookinglogic.php?room_id=<?php echo $_GET['room_id'] ?>">
<?php
  $view = '';

  if(isset($_SESSION['user_info'])) {
      $view = '<p>' . $_SESSION['user_info'] . '</p>';
  }else {
    $view = '<label>Firstname</label>&nbsp;
  <input type="text" name="firstname">
  <br><br><br><br><br><br>
  <label>Lastname</label>&nbsp;&nbsp;
  <input type="text" name="lastname">
  <br><br><br><br><br><br>
  <label>ID number</label>&nbsp;
  <input type="text" name="idnumber">
  <br><br><br><br><br><br>
  <label>Phone No.</label>&nbsp;&nbsp;
  <input type="text" name="phone">
  <br><br><br><br><br><br>
  <label>Email</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="email" name="email">
  <br><br><br><br><br><br>';
  }

echo $view;
  
   ?>
  <label>Check-in date</label>
  <!--<div id="datepicker" class="input-group date" date-date-format="dd-mm-yyyy">-->
  <input type="date" name="checkin">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
 <!-- </div>-->
  <script type="text/javascript">
    $(function(){
        $("#datepicker").datepicker({
          autoclose:true,
          todayHighlight:true
        }).datepicker('update', new Date());
    });
  </script>
  <br><br><br><br><br><br>
  <label>Checkout date</label>
  <!--<div id="datepicker" class="input-group date" date-date-format="dd-mm-yyyy">-->
  <input type="date" name="checkout">
  <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
  <!--</div>-->
  <script type="text/javascript">
    $(function(){
        $("#datepicker").datepicker({
          autoclose:true,
          todayHighlight:true
        }).datepicker('update', new Date());
    });
  </script>
  <br><br><br><br><br><br>
 <label>Number of rooms</label>
             <select name = "roomnumber" style="height: 25px; width: 125px;">
               <option value = "Single">Single</option>
               <option value = "Double">Double</option>
               <option value = "Triple">Triple</option>
               <option value = "Quad">Quad</option>
             </select>
        <br><br><br><br><br><br><br>
        <label>Size of room</label>&nbsp;&nbsp;&nbsp;&nbsp;
             <select name = "sizeroom" style="height: 25px; width: 150px;">
               <option value = "Standard">Standard</option>
               <option value = "Deluxe">Deluxe</option>
               <option value = "Joint">Joint</option>
               <option value = "Suite">Suite</option>
             </select>
        <br><br><br><br><br><br><br>
             <label>Type of room</label>&nbsp;&nbsp;
             <select name = "typeroom" style="height: 25px; width: 150px;">
               <option value = "Standard">Standard</option>
               <option value = "Deluxe">Deluxe</option>
               <option value = "Executive">Executive</option>
               <option value = "Presidential">Presidential</option>
             </select>
<br><br><br><br><br><br>
<button type="submit" name="book"class="bookbtn"><b>Book now</b></button>


 </form>
 </div>
 <?php
include_once 'footer.php';
?>