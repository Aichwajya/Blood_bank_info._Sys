
<!DOCTYPE HTML>
<html>
<head>
<title>Blood Bank informtion System(BBIS)</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Donate Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Archivo+Narrow:400,700' rel='stylesheet' type='text/css'>
<!--google fonts-->
</head>
<body>
	<?php include('admin/function.php'); ?>
<!--banner start here-->
<div class="banner1">
	<div class="header1">
   <div class="container">
     <div class="header-main">
	   <div class="logo">
	     <h1><a href="index.php">BBIS</a></h1>
				 <h4>(Blood Bank Info. System)</h4>
	   </div>
	   <div class="header-icons">
	   	 <ul>
	   	 	<li><a href="#" class="fb"> </a></li>
	   	 	<li><a href="#" class="twit"> </a></li>
	   	 	<li><a href="#" class="gmail"> </a></li>
	   	 	<li><a href="#" class="dri"> </a></li>
	   	 </ul>
	   </div>
	    <div class="clearfix"> </div>
      </div>
    </div>
  </div>

<div class="top-nav-main">
<div class="top-nav">
            	<span class="menu"> <img src="images/icon.png" alt=""></span>	
				<?php require('header.php');?>
	  </div>
  </div>		
</div>




 <div class="container well" style="margin-top: 50px">



       

            <div class="panel-body">
                
               <b style="font-size: x-large;color: #b0b0b0;">DONOR-LOGIN</b>
                
                <center>  
                <form method="post" action="forget_db.php">
   <table cellpadding="0" cellspacing="0"  >
     <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
    <tr><td colspan="2" align="center"></td></tr>
    
     <tr><td colspan="2">&nbsp;</td></tr>  <tr><td colspan="2">&nbsp;</td></tr> 
                <tr><td align="right"><img src="photu/1200px-Blood_donation_pictogram.svg.png" width="100px" height="9%">
                    
                    
                    
                    <?php
                    
                    for($a=1;$a<=10;$a++)
                        
                    {
                        echo'&nbsp;';
                    }
                    
                    ?>
                    
                    
                    </td>
                    <td style="vertical-align:top"><table cellpadding="0" cellspacing="0" height="200px">             


<tr><td class="lefttd"><b style="color:#9b9a9a">E-Mail</b></td><td><input type="email" name="email" required="required"/></td></tr>
   
                        <tr><td>&nbsp;</td><td>&nbsp;</td></tr>
              
</table>
</td></tr></table>

                <input type="submit" name="sbtn">
         
		
</form>
                    
                    </center>
                
                
                
                
           </div>
           
           
    </div>




<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 ftr-grid">
				<h3>Navigation</h3>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">Info Of Donor</a></li>
					<li><a href="Admin/index.php">Admin LogIn</a></li>
					<li><a href="login.php">Donor Login</a></li>
				 
				</ul>
			</div>
			<div class="col-md-4 ftr-grid">
				
			</div>
		
			<div class="col-md-4 ftr-grid">
				<h3>Keep In Touch</h3>
				<div class="ftr-icons">
			    	  	 <div class="ftr-iblock">
			        	   <span class="glyphicon glyphicon-map-marker">  </span>
			        	 </div>
			        	 <div class="ftr-text">
			        	 	<p>Kaziranga University, Koraikhuwa, JORHAT-785006, ASSAM</p>
			        	 </div>
			        	 <div class="clearfix"> </div>
			   </div>
			   <div class="ftr-icons">
			    	  	 <div class="ftr-iblock">
			        	   <span class="glyphicon glyphicon-earphone">  </span>
			        	 </div>
			        	 <div class="ftr-text">
			        	 	<p>+91 1800-265-2020</p>
			        	 </div>
			        	 <div class="clearfix"> </div>
			   </div>
			   <div class="ftr-icons">
			    	  	 <div class="ftr-iblock">
			        	   <span class="glyphicon glyphicon-envelope">  </span>
			        	 </div>
			        	 <div class="ftr-text">
			        	 	<p>BBIS.ku17@gmail.com</p>
			        	 </div>
			        	 <div class="clearfix"> </div>
			   </div>
			</div>
			<div class="clearfix"> </div>		
		</div>
	</div>
</div>
<!--footer end here-->
<!--copy rights start here-->
<div class="copy-right">
	<div class="container">
		 <div class="copy-rights-main">
    	    <p>© 2017 Donate. All Rights Reserved | Design by Aichwajya, Nawab, Nishanta </p>
    	 </div>
    </div>
</div>
