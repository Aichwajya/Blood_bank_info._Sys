
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
<!--banner end here-->
<!--about start here-->
    <div class="container well" style="margin-top: 80px">


        <div class="panel-body">
		 
               <b style="font-size: x-large;color: #b0b0b0;">BLOOD-BANK or ORGANIZATION  REGISTRATION</b>
                
                <br>
                <br>
                
                
                <form method="post" action="reg_org_db.php" enctype="multipart/form-data" onsubmit="return validate();">
                    
                    
             <ul class="list-group">
            <li class="list-group-item">Blood Bank/Organization Name :</li>
            <li class="list-group-item"><input style="width:80%;height:45%" type="text" name="name" required="required"
			placeholder="Please enter blood bank or organization name" ></li>
                 
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">Blood Bank/Organization incharge Name :</li>
                        <li class="list-group-item"><input style="width:80%;height:45%" type="text" name="inc_name" required="required"
                                                           placeholder="Please enter blood bank or organization incharge name" ></li>

                    </ul>

       
            <li class="list-group-item">Blood Bank/Organization contact no  :</li>
            <li class="list-group-item"><input style="width:80%;height:45%" type="number" name="contact" required="required"
			placeholder="Please enter incharge contact no." /></li>

                    
                    <li class="list-group-item">Blood Bank/Organization E-Mail :</li>
            <li class="list-group-item"><input style="width:80%;height:45%" type="email" name="email" required="required" placeholder="Please enter the e-mail ID" ></li>
                
                
                <li class="list-group-item">Address of the Blood Bank/Organization :</li>
            <li class="list-group-item"><input style="width:80%;height:45%" type="text" name="add" required="required"
			placeholder="Please enter address" ></li>

                    </ul>
								
                <br>
                <center>   
                    
                    
                    <input style="width:20%;height:50%" type="submit" value="REGISTER" name="sbmt">
                    
                    
                    </center>
                
                    
                </form>
	</div>
</div>
            
<!--team end here-->
<!--footer start here-->
<div class="footer">
	<div class="container">
		<div class="footer-main">
			<div class="col-md-4 ftr-grid">
				<h3>Navigation</h3>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="donar.php">Info Of Donor</a></li>
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
<!--copy right end here-->

<script>
	function validate()
	{
		if(document.getElementById('pass').value!=document.getElementById('cpass').value)
		{
			alert("Password and Confirm Password does not match");
			return false;
		}
	}
</script>


</body>
</html>