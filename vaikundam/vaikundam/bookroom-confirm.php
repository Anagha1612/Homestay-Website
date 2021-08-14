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
    
    <table align="center" width="100%">
            <tr>
                <td>
    <img src="img/room5/2.jpg"  width="500px" height="500px">
    </td>
    <td>
	<?php
		include("db_connection.php");
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$address=$_POST['address'];
		$mailid=$_POST['mailid'];
		$contactno=$_POST['contactno'];
		$sql1="SELECT * FROM rooms";
		$result1=$connect->query($sql1);
		while($row=$result1->fetch_assoc())
		{
			if($row['status']=='oc')
			{
				$roomno=$row['room_no'];
				$roomtype=$row['type'];
				$price=$row['price'];
			}
		}
		//$sql="INSERT INTO customer(fname,lname,address,mailid,contact_no,room_no)
		//VALUES($fname,$lname,$address,$mailid,$contactno,$roomno)";
		mysqli_query($connect,"INSERT INTO customer(fname,lname,address,mailid,contact_no,room_no)
		VALUES($fname,$lname,$address,$mailid,$contactno,$roomno)");
		echo "<br>Your Booking is Confirmed! <br><br>";
		echo "Booking Details<br>";
		echo "Name: ".$fname." ".$lname."<br>";
		echo "Address: ".$address."<br>";
		echo "Email id: ".$mailid."<br>";
		echo "Contact No: ".$contactno."<br>";
		echo "<br><br>Selected Rooms: <br><br>";
		echo "Room No: ".$roomno."<br>";
		echo "Room Type: ".$roomtype."<br>";
		echo "Price: &#x20B9;".$price."<br>";
	?>
</td>
<td>
    <img src="img/room5/3.jpg"  width="500px" height="500px">
</td>
</table>
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