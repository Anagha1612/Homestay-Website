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
	<div class="bookrooms-image">
            <div class="bookrooms-text">
                <b><font size="20" face="IM Fell French Canon" color="white">Book Rooms</font></b>
            </div>
    </div>
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=IM Fell French Canon' rel='stylesheet'>
	<section class="search-filter other-page-filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="bookroom-catalog.php" class="check-form" method="POST">
                        <?php
                            include("db_connection.php");
                            $sql="SELECT * FROM rooms";
                            $result=$connect->query($sql);
                        ?>
                        <font style="font-family: Open Sans; font-size: 16px;">Check Availability</font>
                        <center>
                        <div class="datepicker">
                            <p>Check-in</p>
                            <input type="date" name="checkin" class="datepicker-1" value="dd / mm / yyyy">
                            <img src="img/calendar.png" alt="">
                        </div>
                        <div class="datepicker">
                            <p>Check-out</p>
                            <input type="date" name="checkout" class="datepicker-2" value="dd / mm / yyyy">
                            <img src="img/calendar.png" alt="">
                        </div>
                        <div class="room-quantity">
                            <div class="single-quantity">
                                <p>Adults</p>
                                <div class="pro-qty"><input type="number" name="adultno" value="0"></div>
                            </div>
                            <div class="single-quantity">
                                <p>Children</p>
                                <div class="pro-qty"><input type="number" name="childno" value="0"></div>
                            </div>
                            <div class="single-quantity last">
                                <p>Rooms</p>
                                <div class="pro-qty"><input type="number" name="roomno" value="0"></div>
                            </div>
                        </div>
                        <input style="color: white; background-color: #000099; font-size: 17px;" type="submit" value="Go" />
                    </center>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <hr>
	<footer>
        <font face="Open Sans">
            <div align="center" id="contactus">
                <b>CONTACT US</b><br>Vaikundam Legacy,<br>
                Kaliyal, Alancholai P O<br>
                Ph: +919344988288<br>
                Email- vaikundamlegacy@gmail.com
            </div>
        </font>
    </footer>
</body>
</html>