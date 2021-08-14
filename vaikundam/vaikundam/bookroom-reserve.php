<! DOCTYPE HTML>
<html>
<head>
    <title>Book Rooms</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=IM Fell French Canon' rel='stylesheet'>
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
    <center>
    	<table align="center" width="100%">
       <td bgcolor="#ffd29d" >
	<form action="bookroom-confirm.php" method="POST">
		<?php
			include("db_connection.php");
			$sql="SELECT * FROM rooms";
			$result=$connect->query($sql);
			echo "<br>Selected Rooms: <br><br>";
			while($row=$result->fetch_assoc())
			{
				$final=$_POST['final'.$row['room_no']];
				if($final=="y")
				{
					$room=$row['room_no'];
					echo "Room ".$room;;
					echo "&nbsp;&nbsp;&nbsp;&nbsp;Room Type: ".$row['type']."<br>";
					mysqli_query($connect,"UPDATE rooms SET status='oc' WHERE room_no=$room");
				}
			}
		?>

	</form></td></table><center>
         <br><br>

        <br><br><b><h2>Enter Your Details:</h2></b>
        <table align="center" border=1 style="border:2px;bordercolor:red;weight:bold;" bgcolor="#CDF7B2" align = "center" width = "35%"  >
            <tr>
                <td>First Name: </td>
                <td><center><input type="text" size=30 name="fname" id="fname" required></center></td>
            </tr>
            <tr>
                <td>Last Name: </td>
                <td><center><input type="text" size=30 name="lname" id="lname" required></center></td>
            </tr>
            <tr>
                <td>Address: </td>
                <td><center><textarea name="address" id="address" rows=2 cols=29  required></textarea></center></td>
            </tr>
            <tr>
                <td>Email id: </td>
                <td><center><input type="email" size=30 name="mailid" id="mailid"></center> </td>
            </tr>
            <tr>
                <td>Contact Number: </td>
                <td><center><input type="text" size=30 name="contactno" id="contactno"  required></center> </td>
            </tr>
        </table>
        <center>
		<input style="color: white; background-color: #000099; font-size: 17px;" type="submit" value="Confirm Reservation" />
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