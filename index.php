<!DOCTYPE html>
<html>
<head>
	<title>ICC Rankings</title>
	<link rel="stylesheet" type="text/css" href='css/s.css'>

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
</head>

<body>
	<!----hero Section start---->
	<section id="header">
	<div class="hero">
		<nav>
			<h2 class="logo">ICC<span style="color: #030113">&nbsp;RANKINGS&nbsp</span></h2>
			<ul>
				<li class="btni"><a href="#home">Home</a></li>
				<li class="btni"><a href="#ranking">Rankings</a></li>
				<li class="btni"><a href="#about_section">About Us</a></li>
				<li class="btni"><a href="ChatBot/chat.html">Chat Support</a></li>
				<li class="btni"><a href="LOGIN/login.php">Log in</a></li>
			</ul>
			<a href="#footer" class="btni">Join Us</a>
		</nav>
		<div class="content">
			<h4>Here you can see</h4>
			<h1>ICC <span> Rankings</span></h1>
			<h3>of all formats</h3>
		</div>
	</div>

	</section>
	

	
		<!-- Rankings Tables  -->
       <section class="rankings" id="ranking">

	   
		<center style="padding:5px"><p style="color:#190970;font-size:65px;Margin:60px">RANKINGS</p></center>
		<section class="tables" id="bat" style="font-family: Arial, sans-serif;">
    <table class="rank" style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr>
            <th colspan="3" style="background-color: #4CAF50; color:#190870; padding: 10px;">BATSMAN</th>
        </tr>
        <tr class="leftStyle" >
            <th style="background-color: #f2f2f2; padding: 10px;color:black">Name</th>
            <th style="background-color: #f2f2f2; padding: 10px;color:black">Country</th>
            <th style="background-color: #f2f2f2; padding: 10px;color:black">Rank</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "project");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Name, country, rank FROM batsman";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr style='text-align: center;'>
                        <td style='padding: 10px;'>" . $row["Name"]. "</td>
                        <td style='padding: 10px;'>" . $row["country"] . "</td>
                        <td style='padding: 10px;'>" . $row["rank"]. "</td>
                      </tr>";
            }
        } else { 
            echo "<tr><td colspan='3' style='text-align: center; padding: 10px;'>0 results</td></tr>"; 
        }
        $conn->close();
        ?>
    </table>
    
    <table class="rank" style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr>
            <th colspan="3" style="background-color: #4CAF50; color:#190870; padding: 10px;">BOWLER</th>
        </tr>
        <tr class="leftStyle" >
            <th style="background-color: #f2f2f2; padding: 10px;">Name</th>
            <th style="background-color: #f2f2f2; padding: 10px;">Country</th>
            <th style="background-color: #f2f2f2; padding: 10px;">Rank</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "project");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Name, country, rank FROM bowler";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr style='text-align: center;'>
                        <td style='padding: 10px;'>" . $row["Name"]. "</td>
                        <td style='padding: 10px;'>" . $row["country"] . "</td>
                        <td style='padding: 10px;'>" . $row["rank"]. "</td>
                      </tr>";
            }
        } else { 
            echo "<tr><td colspan='3' style='text-align: center; padding: 10px;'>0 results</td></tr>"; 
        }
        $conn->close();
        ?>
    </table>
    
    <table class="rank" style="width: 100%; border-collapse: collapse; margin-bottom: 20px;">
        <tr>
            <th colspan="3" style="background-color: #4CAF50; color:#190870; padding: 10px;">ALL ROUNDER</th>
        </tr>
        <tr class="leftStyle" >
            <th style="background-color: #f2f2f2; padding: 10px;">Name</th>
            <th style="background-color: #f2f2f2; padding: 10px;">Country</th>
            <th style="background-color: #f2f2f2; padding: 10px;">Rank</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "project");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT Name, country, rank FROM allrounder";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<tr style='text-align: center;'>
                        <td style='padding: 10px;'>" . $row["Name"]. "</td>
                        <td style='padding: 10px;'>" . $row["country"] . "</td>
                        <td style='padding: 10px;'>" . $row["rank"]. "</td>
                      </tr>";
            }
        } else { 
            echo "<tr><td colspan='3' style='text-align: center; padding: 10px;'>0 results</td></tr>"; 
        }
        $conn->close();
        ?>
    </table>
</section>

			</section>

	<!----About section start---->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 70px; padding: 50px;color:white">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="./Images/Teams.webp">
				</div>
				<div class="side-text">
					<h2>Things About History Of ICC:</h2>
					<p>The International Cricket Council (ICC) is the world governing body of cricket. Headquartered in Dubai, United Arab Emirates, its members are 108 national associations, with 12 Full Members and 96 Associate Members. Founded in 1909 as the Imperial Cricket Conference, it was renamed the International Cricket Conference in 1965, and took up its current name in 1987.

The ICC has 108 member nations currently: 12 Full Members that play Test matches, and 96 Associate Members.[5] The ICC is responsible for the organisation and governance of cricket's major international tournaments, most notably the Cricket World Cup and the T20 World Cup. It also appoints the umpires and referees that officiate at all sanctioned Test matches, One Day Internationals and Twenty20 Internationals. It promulgates the ICC Code of Conduct, which sets professional standards of discipline for international cricket,[6] and also co-ordinates action against corruption and match-fixing through its Anti-Corruption and Security Unit (ACSU).</p>
				</div>
		</div>
	</div>


		</center>

	<!------Contact Me------>
	<div class="contact-me">
		<p>If you want to give us some feedback</p>
		<a class="button-two" href="#">click here</a>
	</div>

	<!------footer start--------->
	<footer id="footer">
		<p>Internationl Cricket Council(ICC)</p>
		<p>For more updates - please click on the link below to subscribe our social median platfroms</p>
		<div class="social">
			<a href="#"><i class="fab fa-facebook-f"></i></a>
			<a href="#"><i class="fab fa-instagram"></i></a>
			<a href="#"><i class="fab fa-dribbble"></i></a>
		</div>
		<p class="end">ICC website,All rights reserved by @AshishChauhan</p>
	</footer>
</body>
</html>