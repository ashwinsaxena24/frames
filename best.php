<html>
    <head>
	<link rel="shortcut icon" href="i/icons/logo.ico"/>
	<title>Best Shots</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="style1.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<link  href="fancybox-3.0/dist/jquery.fancybox.min.css" rel="stylesheet">
    <script src="fancybox-3.0/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
    	/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

    </script>
        <style>
		    body    {
		              background:url("i/bg2_blur.jpg");
					  background-size:100%;
				    }
			.img1{
			      width:400px;
				  height:auto;
				  border:1px solid rgba(255,255,255,0.4);
	 	          border-radius:5%;
				  transition:0.5s;
				  margin:10px 10px 10px 0px;
				  }
			.img1:hover{
			           border:1px solid rgba(255,255,255,0.8);
			            box-shadow:0px 0px 100px black;
						border-radius:2%;
					   }	  
			.well{ border-color:rgba(0,0,0,0);
			       background:rgba(255,255,255,0.1);
                   margin:20px 20px 20px 0px;
				   box-shadow:2px 2px 20px rgba(0,0,0,0.5);
                   border-radius:2%;
                   width:100%;				   
                  } 
			.cap{
			     font-size:30px;
				 font-family:Josefin Sans;
				 color:#F0F0F0;
				 text-align:center;
				 text-shadow:1px 1px 10px rgba(0,0,0,0.9);
			    }
            a:hover{text-decoration:none;}
            a:focus{text-decoration:none; outline:0 !important;}
           /* Dropdown Button*/ 
.dropbtn {
    font-size: 20px;
    font-family:Josefin Sans;
    border: none;
    cursor: pointer;
    background-color: rgba(0,0,0,0);
    color: #F0F0F0;
    margin: 7px 20px;
    padding: 7px 10px;
    transition: 0.2s;
}

/*Dropdown button on hover & focus*/
.dropbtn:hover{
   color:#070707;
   border-radius:5%;
   padding: 8px 12px;	
   background-color: #F0F0F0;
   box-shadow:0px 0px 30px rgba(0,0,0,0.5);
}
.dropbtn:focus{
	border:0px;
}
/* The container <div> - needed to position the dropdown content*/ 
.dropdown {
    
    position: relative;
    display: list-item;

}

/* Dropdown Content (Hidden by Default)*/ 
.dropdown-content {
    display: none;
    position: absolute;
    background: rgba(255,255,255,0.9);
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.5);
    font-family:Josefin Sans;
    font-size: 18px;
    z-index: 1;
    border-radius: 1%;
}

/* Links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-align: center;
    text-decoration: none;
    display: block;
    transition: 0.5s;
}

/* Change color of dropdown links on hover*/ 
.dropdown-content a:hover {background-color: rgba(177,80,0,0.5);border-radius:3%; font-size: 22px ;padding: 20px;
}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) 
.show {display:block;} */


		</style>
	<body>
	    <nav class = "navbar nav1" >   
            <div class="navbar-header">
               <div class="navbar-brand brand1">Frames</div>
            </div>
            <ul class = "nav navbar-nav" >
			    <li><div class="margin-top:25px" style="font-size: 30px; font-family:Josefin Sans; color:#F0F0F0">|</div></li>
		        <li><a href="index.php" class="tlist">Home</a></li>
				<li><a  class="active">Best Shots</a></li>
		        <li><a href = "about.php" class="tlist">About</a></li>
				<li><div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">Categories</button>
                
                <div id="myDropdown" class="dropdown-content">
                <?php
                	$ping = 'pong';
                	require 'includes/variables.php';
                	foreach ($categories as $c) {
                		$upper = ucfirst($c);
                		echo "<a href='main.php?cat=$c'>$upper</a>";
                	}
                ?>
                </div>
    			</div></li>
		    <li><div class="margin-top:25px" style="font-size: 30px; font-family:Josefin Sans; color:#F0F0F0">|</div></li>
				</ul>
        </nav>
				
				
        <div class=" container-fluid">
        <div class="well row">
	    <div class="col-xs-4" >   
			<figure><a data-fancybox="gallery" href="i/best/1.jpg"><img src="i/best/1.jpg" class="img1" >
			<figcaption class="cap">Light Trails</figcaption></figure></a></div>
		<div class="col-xs-4">   
			<figure><a data-fancybox="gallery" href="i/best/2.jpg"><img src="i/best/2.jpg" class="img1" >
			<figcaption class="cap">Waterfall</figcaption></figure></a></div>
		<div class="col-xs-4">   
			<figure><a data-fancybox="gallery" href="i/best/3.jpg"><img src="i/best/3.jpg" class="img1" >
			<figcaption class="cap">Glass Frost</figcaption></figure></a></div>
		</div>
		<div class="well row">
		<div class="col-xs-4">	
			<figure><a data-fancybox="gallery" href="i/best/4.jpg"><img src="i/best/4.jpg" class="img1" >
			<figcaption class="cap">Rain</figcaption></figure></a></div>
		<div class="col-xs-4">   
			<figure><a data-fancybox="gallery" href="i/best/5.jpg"><img src="i/best/5.jpg" class="img1" >
			<figcaption class="cap">Shades</figcaption></figure></a></div>
		<div class="col-xs-4">	
			<figure><a data-fancybox="gallery" href="i/best/6.jpg"><img src="i/best/6.jpg" class="img1" >
			<figcaption class="cap">Lizard</figcaption></figure></a></div>
		</div>
	    <div class="well row">
	    <div class="col-xs-4">   
			<figure><a data-fancybox="gallery" href="i/best/7.jpg"><img src="i/best/7.jpg" class="img1" >
			<figcaption class="cap">Light Trails 2</figcaption></figure></a></div>
		<div class="col-xs-4">   
			<figure><a data-fancybox="gallery" href="i/best/8.jpg"><img src="i/best/8.jpg" class="img1" >
			<figcaption class="cap">Diwali</figcaption></figure></a></div>
			<div class="col-xs-4 mar" ><div style="font-size:40px;margin:120px 50px;color:#F0F0F0;">More To come...</div>
			<!--<a data-fancybox="gallery" href="i/best/3.jpg"><img src="i/best/3.jpg" class="img1" ></a>--></div>
		</div>
       </div>
	   
	</body>		
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
	