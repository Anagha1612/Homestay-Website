<?php
	include("db_connection.php");
	$sql="SELECT * FROM rooms";
	$result=$connect->query($sql);
	$qno=1;
	$checkin=$_POST['checkin'];
	$checkout=$_POST['checkout'];
	$adultno=$_POST['adultno'];
	$childno=$_POST['childno'];
	$roomno=$_POST['roomno'];
?>
<! DOCTYPE HTML>
<html>
<head>
    <title>Book Rooms</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=IM Fell French Canon' rel='stylesheet'>
    <script>
		function popupfunction(x)
		{
			if(x==1.1)
			{
				document.getElementById('popup1.1').style.display='block';
				document.getElementById('fade1.1').style.display='block';
			}
			if(x==1.2)
			{
				document.getElementById('popup1.2').style.display='block';
				document.getElementById('fade1.2').style.display='block';
			}
			if(x==1.3)
			{
				document.getElementById('popup1.3').style.display='block';
				document.getElementById('fade1.3').style.display='block';
			}
			if(x==1.4)
			{
				document.getElementById('popup1.4').style.display='block';
				document.getElementById('fade1.4').style.display='block';
			}
			if(x==1.5)
			{
				document.getElementById('popup1.5').style.display='block';
				document.getElementById('fade1.5').style.display='block';
			}
			if(x==2.1)
			{
				document.getElementById('popup2.1').style.display='block';
				document.getElementById('fade2.1').style.display='block';
			}
			if(x==2.2)
			{
				document.getElementById('popup2.2').style.display='block';
				document.getElementById('fade2.2').style.display='block';
			}
			if(x==2.3)
			{
				document.getElementById('popup2.3').style.display='block';
				document.getElementById('fade2.3').style.display='block';
			}
			if(x==2.4)
			{
				document.getElementById('popup2.4').style.display='block';
				document.getElementById('fade2.4').style.display='block';
			}
			if(x==3.1)
			{
				document.getElementById('popup3.1').style.display='block';
				document.getElementById('fade3.1').style.display='block';
			}
			if(x==3.2)
			{
				document.getElementById('popup3.2').style.display='block';
				document.getElementById('fade3.2').style.display='block';
			}
			if(x==3.3)
			{
				document.getElementById('popup3.3').style.display='block';
				document.getElementById('fade3.3').style.display='block';
			}
			if(x==3.4)
			{
				document.getElementById('popup3.4').style.display='block';
				document.getElementById('fade3.4').style.display='block';
			}
			if(x==4.1)
			{
				document.getElementById('popup4.1').style.display='block';
				document.getElementById('fade4.1').style.display='block';
			}
			if(x==4.2)
			{
				document.getElementById('popup4.2').style.display='block';
				document.getElementById('fade4.2').style.display='block';
			}
			if(x==4.3)
			{
				document.getElementById('popup4.3').style.display='block';
				document.getElementById('fade4.3').style.display='block';
			}
			if(x==4.4)
			{
				document.getElementById('popup4.4').style.display='block';
				document.getElementById('fade4.4').style.display='block';
			}
			if(x==5.1)
			{
				document.getElementById('popup5.1').style.display='block';
				document.getElementById('fade5.1').style.display='block';
			}
			if(x==5.2)
			{
				document.getElementById('popup5.2').style.display='block';
				document.getElementById('fade5.2').style.display='block';
			}
			if(x==5.3)
			{
				document.getElementById('popup5.3').style.display='block';
				document.getElementById('fade5.3').style.display='block';
			}
			if(x==5.4)
			{
				document.getElementById('popup5.4').style.display='block';
				document.getElementById('fade5.4').style.display='block';
			}
			if(x==5.5)
			{
				document.getElementById('popup5.5').style.display='block';
				document.getElementById('fade5.5').style.display='block';
			}
			if(x==6.1)
			{
				document.getElementById('popup6.1').style.display='block';
				document.getElementById('fade6.1').style.display='block';
			}
			if(x==6.2)
			{
				document.getElementById('popup6.2').style.display='block';
				document.getElementById('fade6.2').style.display='block';
			}
			if(x==6.3)
			{
				document.getElementById('popup6.3').style.display='block';
				document.getElementById('fade6.3').style.display='block';
			}
			if(x==6.4)
			{
				document.getElementById('popup6.4').style.display='block';
				document.getElementById('fade6.4').style.display='block';
			}
		}
		function popupclose(x)
		{
			if(x==1.1)
			{
				document.getElementById('popup1.1').style.display='none';
				document.getElementById('fade1.1').style.display='none';
			}
			if(x==1.2)
			{
				document.getElementById('popup1.2').style.display='none';
				document.getElementById('fade1.2').style.display='none';
			}
			if(x==1.3)
			{
				document.getElementById('popup1.3').style.display='none';
				document.getElementById('fade1.3').style.display='none';
			}
			if(x==1.4)
			{
				document.getElementById('popup1.4').style.display='none';
				document.getElementById('fade1.4').style.display='none';
			}
			if(x==1.5)
			{
				document.getElementById('popup1.5').style.display='none';
				document.getElementById('fade1.5').style.display='none';
			}
			if(x==2.1)
			{
				document.getElementById('popup2.1').style.display='none';
				document.getElementById('fade2.1').style.display='none';
			}
			if(x==2.2)
			{
				document.getElementById('popup2.2').style.display='none';
				document.getElementById('fade2.2').style.display='none';
			}
			if(x==2.3)
			{
				document.getElementById('popup2.3').style.display='none';
				document.getElementById('fade2.3').style.display='none';
			}
			if(x==2.4)
			{
				document.getElementById('popup2.4').style.display='none';
				document.getElementById('fade2.4').style.display='none';
			}
			if(x==3.1)
			{
				document.getElementById('popup3.1').style.display='none';
				document.getElementById('fade3.1').style.display='none';
			}
			if(x==3.2)
			{
				document.getElementById('popup3.2').style.display='none';
				document.getElementById('fade3.2').style.display='none';
			}
			if(x==3.3)
			{
				document.getElementById('popup3.3').style.display='none';
				document.getElementById('fade3.3').style.display='none';
			}
			if(x==3.4)
			{
				document.getElementById('popup3.4').style.display='none';
				document.getElementById('fade3.4').style.display='none';
			}
			if(x==4.1)
			{
				document.getElementById('popup4.1').style.display='none';
				document.getElementById('fade4.1').style.display='none';
			}
			if(x==4.2)
			{
				document.getElementById('popup4.2').style.display='none';
				document.getElementById('fade4.2').style.display='none';
			}
			if(x==4.3)
			{
				document.getElementById('popup4.3').style.display='none';
				document.getElementById('fade4.3').style.display='none';
			}
			if(x==4.4)
			{
				document.getElementById('popup4.4').style.display='none';
				document.getElementById('fade4.4').style.display='none';
			}
			if(x==5.1)
			{
				document.getElementById('popup5.1').style.display='none';
				document.getElementById('fade5.1').style.display='none';
			}
			if(x==5.2)
			{
				document.getElementById('popup5.2').style.display='none';
				document.getElementById('fade5.2').style.display='none';
			}
			if(x==5.3)
			{
				document.getElementById('popup5.3').style.display='none';
				document.getElementById('fade5.3').style.display='none';
			}
			if(x==5.4)
			{
				document.getElementById('popup5.4').style.display='none';
				document.getElementById('fade5.4').style.display='none';
			}
			if(x==5.5)
			{
				document.getElementById('popup5.5').style.display='none';
				document.getElementById('fade5.5').style.display='none';
			}
			if(x==6.1)
			{
				document.getElementById('popup6.1').style.display='none';
				document.getElementById('fade6.1').style.display='none';
			}
			if(x==6.2)
			{
				document.getElementById('popup6.2').style.display='none';
				document.getElementById('fade6.2').style.display='none';
			}
			if(x==6.3)
			{
				document.getElementById('popup6.3').style.display='none';
				document.getElementById('fade6.3').style.display='none';
			}
			if(x==6.4)
			{
				document.getElementById('popup6.4').style.display='none';
				document.getElementById('fade6.4').style.display='none';
			}
		}
		function topFunction() 
		{
  			document.body.scrollTop = 0;
  			document.documentElement.scrollTop = 0;
		}
		function pickroom(roomno)
		{
			document.getElementById("final"+roomno).value="y";
		}
	</script>
</head>
<body>
	<header>
    	<div class="tab">
    		<button><a style="color: #a41623" href="homepage.html">HOME</a></button>
			<button><a style="color: #a41623" href="aboutus.html">ABOUT US</a></button>
			<button><a style="color: #a41623" href="rooms.html">ROOMS AND DINING</a></button>
            <button><a style="color: #a41623" href="facilities.html">FACILITIES</a></button>
            <button><a style="color: #a41623" href="explore.html">EXPLORE</a></button>
            <button><a style="color: #a41623" href="bookrooms.php">BOOK ROOMS</a></button>
			<button><a style="color: #a41623" href="#contactus">CONTACT US</a></button>
		</div>
        <div class="main-text">
            <b><font color="#a41623" size="7px" face="IM Fell French Canon">Vaikundam Legacy</font></b>
        </div>
    </header>
	<!---Picture-->
	<div class="rooms-image">
	       <!-- <div class="rooms-text">-->
	            <b><font face="Open Sans" color="white">Check-in: <?php echo $checkin; ?> Check-out: <?php echo $checkout; ?> Adults: <?php echo $adultno; ?> Children: <?php echo $childno; ?> Rooms: <?php echo $roomno; ?> </font></b>
	        <!--</div>-->
	</div>
	<br>
	<!---the content--->
	<form action="bookroom-reserve.php" method="POST">
	<table cellspacing="10" style="font-family: Open Sans;">
		<tr>
			<td>
				<div class="rooms1-image">
			        <div class="rooms1-text">
			            <a style="color: #ffd29d;background-color: black" href="javascript:void(0)" onclick="popupfunction('2.1');topFunction()">View Photos</a>
			        </div>
				</div>
				<div id="popup2.1" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room2/1.jpg" width=60% /><br><br><center><button class="right-btn" onclick="popupfunction('2.2');popupclose('2.1')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('2.1')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade2.1" class="black_content"></div>
				<div id="popup2.2" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room2/2.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('2.1');popupclose('2.2')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('2.3');popupclose('2.2')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('2.2')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade2.2" class="black_content"></div>
				<div id="popup2.3" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room2/3.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('2.2');popupclose('2.3')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('2.4');popupclose('2.3')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('2.3')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade2.3" class="black_content"></div>
				<div id="popup2.4" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room2/4.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('2.3');popupclose('2.4')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('3.1');popupclose('2.4')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('2.4')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade2.4" class="black_content"></div>
				<div id="popup3.1" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room3/1.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('2.4');popupclose('3.1')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('3.2');popupclose('3.1')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('3.1')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade3.1" class="black_content"></div>
				<div id="popup3.2" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room3/2.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('3.1');popupclose('3.2')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('3.3');popupclose('3.2')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('3.2')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade3.2" class="black_content"></div>
				<div id="popup3.3" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room3/3.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('3.2');popupclose('3.3')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('3.4');popupclose('3.3')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('3.3')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade3.3" class="black_content"></div>
				<div id="popup3.4" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room3/4.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('3.3');popupclose('3.4')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('4.1');popupclose('3.4')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('3.4')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade3.4" class="black_content"></div>
				<div id="popup4.1" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room4/1.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('3.4');popupclose('4.1')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('4.2');popupclose('4.1')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('4.1')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade4.1" class="black_content"></div>
				<div id="popup4.2" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room4/2.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('4.1');popupclose('4.2')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('4.3');popupclose('4.2')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('4.2')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade4.2" class="black_content"></div>
				<div id="popup4.3" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room4/3.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('4.2');popupclose('4.3')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('4.4');popupclose('4.3')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('4.3')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade4.3" class="black_content"></div>
				<div id="popup4.4" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room4/4.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('4.3');popupclose('4.4')">
						<< Prev </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('4.4')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade4.4" class="black_content"></div>
			</td>
			<td width="100%" bgcolor="#ffd29d">
				<p class="rooms-content" align="center">
					<font size="4.5px"><b>Superior deluxe suite with balcony and garden view</b><br> &#x20B9; 5000 + taxes<br>
						<?php
							$availroom=0;
							echo "<br>";
							while($row=$result->fetch_assoc())
							{
								if($row['type']=='Superior deluxe suite with balcony and garden view' and $row['status']=='unoc')
								{
									?>
									<input type="checkbox" name="room<?php echo $row['room_no']; ?>" id="rooms" onclick="pickroom(<?php echo $row['room_no']; ?>)" /><?php echo "Room ".$row['room_no']; ?><br>
									<input type="hidden" name="final<?php echo $row['room_no']; ?>" id="final<?php echo $row['room_no'] ?>" />
									<?php
									$availroom++;
								}
							}
							echo "<br>".$availroom." rooms available<br>";
						?>
					</font>
				</p>
				<br>
			</td>
		</tr>
		<tr>
			<td>
				<div class="rooms2-image">
			        <div class="rooms1-text">
			            <a style="color: #ffd29d;background-color: black" href="javascript:void(0)" onclick="popupfunction('1.1');topFunction()">View Photos</a>
			        </div>
				</div>
				<div id="popup1.1" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room1/1.jpg" width=60% /><br><br><center><button class="right-btn" onclick="popupfunction('1.2');popupclose('1.1')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('1.1')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade1.1" class="black_content"></div>
				<div id="popup1.2" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room1/2.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('1.1');popupclose('1.2')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('1.3');popupclose('1.2')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('1.2')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade1.2" class="black_content"></div>
				<div id="popup1.3" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room1/3.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('1.2');popupclose('1.3')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('1.4');popupclose('1.3')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('1.3')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade1.3" class="black_content"></div>
				<div id="popup1.4" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room1/4.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('1.3');popupclose('1.4')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('1.5');popupclose('1.4')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('1.4')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade1.4" class="black_content"></div>
				<div id="popup1.5" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room1/5.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('1.4');popupclose('1.5')">
						<< Prev </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('1.5')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade1.5" class="black_content"></div>
			</td>
			<td width="100%" bgcolor="#ffd29d">
				<p class="rooms-content" align="center">
					<font size="4.5px"><b>Superior deluxe room with balcony and garden view</b><br> &#x20B9; 4500 + taxes<br>
						<?php
							$sql2="SELECT * FROM rooms";
							$result2=$connect->query($sql2);
							$availroom2=0;
							echo "<br>";
							while($row=$result2->fetch_assoc())
							{
								if($row['type']=='Superior deluxe room with balcony and garden view' and $row['status']=='unoc')
								{
									?>
									<input type="checkbox" name="room<?php echo $row['room_no']; ?>" id="rooms" onclick="pickroom(<?php echo $row['room_no']; ?>)" /><?php echo "Room ".$row['room_no']; ?><br>
									<input type="hidden" name="final<?php echo $row['room_no']; ?>" id="final<?php echo $row['room_no'] ?>" />
									<?php
									$availroom2++;
								}
							}
							echo "<br>".$availroom2." room available<br>";
						?>
					</font>
				</p>
				<br>
			</td>
		</tr>
		<tr>
			<td>
				<div class="rooms3-image">
			        <div class="rooms1-text">
			            <a style="color: #ffd29d;background-color: black" href="javascript:void(0)" onclick="popupfunction('5.1');topFunction()">View Photos</a>
			        </div>
			    </div>
		        <div id="popup5.1" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room5/1.jpg" width=648px height="432" /><br><br><center><button class="right-btn" onclick="popupfunction('5.2');popupclose('5.1')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('5.1')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade5.1" class="black_content"></div>
				<div id="popup5.2" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room5/2.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('5.1');popupclose('5.2')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('5.3');popupclose('5.2')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('5.2')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade5.2" class="black_content"></div>
				<div id="popup5.3" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room5/3.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('5.2');popupclose('5.3')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('5.4');popupclose('5.3')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('5.3')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade5.3" class="black_content"></div>
				<div id="popup5.4" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room5/4.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('5.3');popupclose('5.4')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('5.5');popupclose('5.4')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('5.4')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade5.4" class="black_content"></div>
				<div id="popup5.5" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room5/5.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('5.4');popupclose('5.5')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('6.1');popupclose('5.5')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('5.5')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade5.5" class="black_content"></div>
				<div id="popup6.1" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room6/1.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('5.5');popupclose('6.1')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('6.2');popupclose('6.1')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('6.1')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade6.1" class="black_content"></div>
				<div id="popup6.2" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room6/2.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('6.1');popupclose('6.2')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('6.3');popupclose('6.2')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('6.2')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade6.2" class="black_content"></div>
				<div id="popup6.3" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room6/3.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('6.2');popupclose('6.3')">
						<< Prev </button><button class="right-btn" onclick="popupfunction('6.4');popupclose('6.3')">
						Next >> </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('6.3')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade6.3" class="black_content"></div>
				<div id="popup6.4" class="white_content">
					<p align="center"><br><br>
						<img style="border: 2px solid black" src="img/room6/4.jpg" width=60% /><br><br><center><button class="left-btn" onclick="popupfunction('6.3');popupclose('6.4')">
						<< Prev </button><br><br>
						<a href="javascript:void(0)" onclick="popupclose('6.4')" style="color: #ffd29d;background-color: black">Close</a></center>
					</p>
				</div>
				<div id="fade6.4" class="black_content"></div>
			</td>
			<td width="100%" bgcolor="#ffd29d">
				<p class="rooms-content" align="center">
					<font size="4.5px"><b>Deluxe room with balcony and garden view</b><br> &#x20B9; 4000 + taxes<br>
						<?php
							$sql3="SELECT * FROM rooms";
							$result3=$connect->query($sql3);
							$availroom3=0;
							echo "<br>";
							while($row=$result3->fetch_assoc())
							{
								if($row['type']=='Deluxe room with balcony and garden view' and $row['status']=='unoc')
								{
									?>
									<input type="checkbox" name="room<?php echo $row['room_no']; ?>" id="rooms" onclick="pickroom(<?php echo $row['room_no']; ?>)" /><?php echo "Room ".$row['room_no']; ?><br>
									<input type="hidden" name="final<?php echo $row['room_no']; ?>" id="final<?php echo $row['room_no'] ?>" />
									<?php
									$availroom3++;
								}
							}
							echo "<br>".$availroom3." rooms available<br>";
						?>
					</font>
				</p>
				<br>
			</td>
		</tr>
	</table>
	<center><input style="color: white; background-color: #000099; font-size: 17px;" type="submit" value="Proceed" /></center>
	</form>
	<font face="Open Sans">
		<hr>
		<footer>
		        <div align="center" id="contactus">
	                <b>CONTACT US</b><br>Vaikundam Legacy,<br>
	                Kaliyal, Alancholai P O<br>
	                Ph: +919344988288<br>
	                Email- vaikundamlegacy@gmail.com
	            </div>
	    </footer>
    </font>
</body>
</html>