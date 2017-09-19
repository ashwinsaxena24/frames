<?php $ping='pong'; require_once 'includes/variables.php'; ?>
<html>
    <head>
	<link rel="shortcut icon" href="i/icons/logo.ico"/>
	<title>Frames</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="style1.css">
        <style>
		    body    {
		              background:url("i/bg2_blur.jpg");
					  background-size:100%;
				    }
		</style>
    </head>
    <body>
	    <nav class = "navbar nav1" >   
            <div class="navbar-header">
               <div class="navbar-brand brand1">Frames</div>
            </div>
            <ul class = "nav navbar-nav" >
			    <li><div class="margin-top:25px" style="font-size: 30px; font-family:Josefin Sans; color:#F0F0F0">|</div></li>
		        <li><a  class="active">Home</a></li>
				<li><a href="best.php" class="tlist">Best Shots</a></li>
		        <li><a href = "about.php" class="tlist">About</a></li>
				<li><div class="margin-top:25px" style="font-size: 30px; font-family:Josefin Sans; color:#F0F0F0">|</div></li>
		    </ul>
        </nav>
		
		<nav class="navbar nav2 navbar-fixed-bottom ">
	    
		    <br><br><ul class="navbar-nav nav" >
                <?php
                foreach($categories as $c) {
                    $upperct = ucfirst($c);
                    echo "<li><a href='main.php?cat=$c' class='blist'>$upperct</a></li>";   
                }
                ?>
			</ul>
		</nav>
		<img id="logo" style="margin:20px 0px 0px 70px;" align="left" src="i/front_w/logo.png" height="430" width="480" alt="frames">

		<p> 
		    <div style="font-family:Josefin Sans; font-size: 70px; color:#F0F0F0; margin:100px 150px 100px 0px;" align="right">Photography helps<div style="margin-right:80px">people to see</div></div>
		</p>	
        <p> 
		    <div style="font-family:Josefin Sans; font-size: 25px; color:#F0F0F0; margin-right:50px; margin-top:-100px;" align="right" >-Berenice Abbot</div>
		</p>
    </body>
</html>