<?php
include_once 'header.php';
?>

<style type="text/css">
	:root{
		--primary:#808080;
		--dark:#000000;
		--light:#ffffff;
		--shadow:0 1px 5px rgba(104,104,104,0.8);
	}
	html{
		box-sizing: border-box;
		font-family: sans-serif;
		color: var(--dark);
	}
	body{
		line-height: 1.4px;
		margin:0;
		background-image: url(images/25.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		background-position: center;
		background-attachment: fixed;
	}
	.btn{
		background:var(--dark);
		color: var(--light);
		padding: 0.6rem 1.3rem;
		text-decoration: none;
		border: 0;
	}
	.btn:hover{
		background-color:var(--light);
		color: var(--dark);
	}
	img{
		max-width: 100%;
	}
	.wrapper{
		display: grid;
		grid-gap: 20px;
		margin-left: 30px;
		margin-right:30px;
		margin-top: 50px;

	}
	.boxes{
		display: grid;
		grid-gap: 20px;
		grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
	}
	.box{
		background:var(--primary);
		text-align: center;
		padding: 1.5rem 2rem;
		box-shadow: :var(--shadow);
	}
	.box p{
		font-size: 20px;
	}
	/*footer*/
	footer{
	margin-top:20px; 
	background: rgba(0, 0, 0, 0.7);
	background-color:var(--dark);
	opacity: 0.8;
	color: var(--light);
	margin-left:0px;
	margin-right: 0px;
	display: grid;
	font-family: Times New Roman;
	grid-gap: 20px;
}
.mail{
	background-color:var(--primary);
	padding: 4px 25px 25px 25px;
	text-align: center;
	margin-left: 400px;
	margin-right: 400px;
}
h1{
	font-size: 35px;
	font-family: times new roman;
	color: #000000;
	}
.navigate{
	position: fixed;
	margin-right: 50px;
	margin-left: 250px;
}
	ul li a:hover{
	background-color: #808080;
	width: 200px;
	height: 40px;
}
.footdetails{
	font-size: 20px;
	font-family: Times New Roman;
	text-decoration: none;
}
hr{
	height: 0px;
	width: 200px;
}
	
	</style>
}

<div class="wrapper">
		<center><h1>ACCOMMODATION</h1></center>
	<section class="boxes">
		<!--accomodationIndex-->
		<div class="box">
		 	<img src="images/singleexec.jpg" class="responsive" style="height: 175px; width: 300px;">
		 	<p>Executive suite</p><br><br><br><br><br><br><br><br>
		 	
		 </div>
		  <div class="box">
		 	<img src="images/pressingle.jpg" class="responsive" style="height: 175px; width: 300px;">
		 	<p>Presidential suite</p><br><br><br><br><br><br><br><br>
		 	
		 </div>
		  <div class="box">
		 	<img src="images/singledeluxe.jpg" class="responsive" style="height: 175px; width: 300px;">
		 	<p>Deluxe suite</p><br><br><br><br><br><br><br><br>
		
		 </div>
		 <div class="box">
		 	<img src="images/doublestandard.jpg" class="responsive" style="height: 175px; width: 300px;">
		 	<p>Standard suite</p><br><br><br><br><br><br><br><br>
		 	
		 </div>
		 
	</section>
<div buttonbook>
	<a href="accomodation.php" class="btn" style="padding: 40px;margin-top:0;margin-left:300px; margin-right:175px;margin-bottom:0px; float: left; text-align: center;">View all rooms</a>
	<a href="rooms.php" class="btn" style="padding: 40px;margin-top:0;margin-left:175px; float: right; margin-right:300px;margin-bottom:0px;  text-align: center;">Book now</a>
	</div>
	<center><h1>MEALS</h1></center>
	<section class="boxes">
		 <div class="box">
		 	<img src="images/bf.jpg" style="height: 175px; width: 300px;">
		 	<p>Breakfast</p><br><br><br><br><br><br><br><br>
		 </div>
		  <div class="box">
		 	<img src="images/lunch.jpg" style="height: 175px; width: 300px;">
		 	<p>Lunch</p><br><br><br><br><br><br><br><br>
		 </div>
		  <div class="box">
		 	<img src="images/dessert1.jpg" style="height: 175px; width: 300px;">
		 	<p>Snacks & dessert</p><br><br><br><br><br><br><br><br>
		 	
		 </div>
		  <div class="box">
		 	<img src="images/dinner2.jpg" style="height: 175px; width: 300px;">
		 	<p>Dinner</p><br><br><br><br><br><br><br><br>
		 	
		 </div>

		</section>

	<a href="meals.php" class="btn" style="padding: 40px;margin-top:0;margin-left:575px; margin-right:575px;margin-bottom:0px; float: left; text-align: center;">See menu</a>
	<center><h1>CONFERENCE ROOMS</h1></center>
	<section class="boxes">
		<!--conferenceIndex-->
			<div class="box">
		 	<img src="images/c1.jpg" class="responsive" style="height: 205px;">
		 	<p>Room 1</p><br><br><br><br><br><br><br><br> 	
		 </div>
		  <div class="box">
		 	<img src="images/c2.jpg" class="responsive" style="width:180px height: 150px;">
		 	<p>Room 2</p><br><br><br><br><br><br><br><br>
		 	
		 </div>
		  <div class="box">
		 	<img src="images/c3.jpg" class="responsive" style="height: 205px;">
		 	<p>Room 3</p><br><br><br><br><br><br><br><br>
		 	
		 </div>
		  <div class="box">
		 	<img src="images/c4.jpg" class="responsive" style="height: 205px;">
		 	<p>room 4</p><br><br><br><br><br><br><br><br>
		 	
		</div>


	

	</section>
	<div buttonbook>
	<a href="conference.php" class="btn" style="padding: 40px;margin-top:0;margin-left:300px; margin-right:175px;margin-bottom:0px; float: left; text-align: center;">View conference rooms</a>
	<a href="conf_rooms.php" class="btn" style="padding: 40px;margin-top:0;margin-left:175px; float: right; margin-right:300px;margin-bottom:0px;  text-align: center;">Book now</a>
	</div>
	<center><h1>EXCLUSIVE SERVICES</h1></center>
	<section class="boxes">
		<!--exclusiveIndex-->
		<div class="box">
		 	<img src="images/massage.jpg">
		 	<p>Massage</p>		</div>
		<div class="box">
		 	<img src="images/g3.jpg">
		 	<p>Pool</p>		 	
		 </div>
		  <div class="box">
		 	<img src="images/salon.jpg">
		 	<p>Hairdressing</p>	 	
		 </div>
		  <div class="box">
		 	<img src="images/babysitter.png">
		 	<p>Baby care</p>		 	
		 </div>  
		 </section>
		 
		<!-- <a href="" class="btn" style="padding: 40px;margin-top:0;margin-left:350px; margin-right:350px;margin-bottom:0px;  text-align: center;">Read more exclusive services</a>-->
		 <!--*****************-->
		 
	</div>


<?php
include_once 'footer.php';
?>
	

