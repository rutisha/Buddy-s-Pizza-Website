<html>
<head>
	<title>Dummy Gallery</title>
    <link rel="stylesheet" href="BuddysStyles.css">
</head>
<body>
	<div class="title ">
			<div class="headimg c1"><img src="images.jpeg" class="image" width="100" height="100" alt="image not found">
			</div>
			<div class="head c1"><p class="name">Buddy's Pizza</p></div>
			<div class="head c1">
				<a href="dummyproject.html" class="link">Home</a>
				<a href="menu.html" class="link">Menu</a>
				<a href="about.html" class="link">About Us</a>
				<a href="gallery.html" class="link">Gallery</a>
				<a href="franchise.html" class="link">Franchise</a>
				<a href="ordernow.html" class="link">Order Now</a>
				<a href="buddyslogin.html" class="link">Login</a>
			</div>
			<p style="color:white; text-align:center; font-family: Helvetica, sans-serif"> LOGIN </p>
		</div>
		<div class="loginmiddle">
			<form method="POST" action="login1.php">
				<div class=login>
					<div class="userimg"></div>
					<ul class=list>
						<li ><h2>Login</h2></li>
						<li><input type="text" name="Username" placeholder="Username"</li>
						<li><input type="password" name="Password" placeholder="..........."></li>
						<li><input type="submit" name="Submit" value="Submit"<a href="dummyproject.html"></a></li>
						<li><a href="Registration.html" class="loginlink">Create an Account </a></li>
					</ul>
				</div> 
			</form>
		</div> 
		
		<?php
  
  $conn = mysqli_connect("localhost", "root", "", "demo");
    
 
  $username = $_REQUEST['Username'];
  $password =  $_REQUEST['Password'];
 
    
  $q = "INSERT INTO loginform  VALUES (
      '$username','$password')";
    
  if(mysqli_query($conn, $q)){
    //   echo "<h3>data stored in a database successfully." 
    //       . " Please browse your localhost php my admin" 
    //       . " to view the updated data</h3>"; 

    //   echo nl2br("\n$first_name\n $last_name\n "
    //       . "$email\n $number\n $city \n $msg");
    echo "<h1>Successfully logged in!</h1>";
    
  } 
  else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
    
  // Close connection
  mysqli_close($conn);
  ?>
		
		
		<div class="end">
			<div class="endblock1 c1"><p class="info">Timings</p>
				<pre class="pre">		 Monday - Sunday<br>
		 11:30 - 10:00</pre>
			</div>
												
			<div class="endblock c1"><p class="info">&nbsp;Stay&nbsp;Connected</p>
				<pre class="pre">               Follow us on social media channels</pre>
																	
			</div>
			<div class="endblock c1"><p class="info">Contact&nbsp;Us</p>
				<pre class="pre">           105-106, Kairos, Nr. Manav Mandir,
           Gurukul Road, Memnagar,
	   Ahmedabad - 380052<br><br>
	            +91 9925469600
			</div>
			<div class="c2">
			<br><br>
			<center>
				<a href="dummyproject.html" class="bottomlink">Home &nbsp;|</a> 
				<a href="menu.html" class="bottomlink">Menu &nbsp;|</a>  
				<a href="about.html" class="bottomlink">About Us &nbsp;|</a> 
				<a href="gallery.html" class="bottomlink">Gallery &nbsp;|</a> 
				<a href="franchise.html" class="bottomlink">Franchise &nbsp;|</a> 
				<a href="ordernow.html" class="bottomlink">Order Now &nbsp;|</a> 
				<a href="buddyslogin.html" class="bottomlink">Login &nbsp;|</a> 
			</center>
			</div>
		</div> 
		
	</div>
</body>

</html>