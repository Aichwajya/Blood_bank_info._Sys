
<html>
	<head>
		<title>Blood Bank informtion System(BBIS)</title>
		

<!--link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" -->
<script src="js/jquery-1.11.0.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/StyleSheet.css" rel="stylesheet" type="text/css" media="all"/>
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
	<?php include('Admin/function.php'); ?>
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
	   	 	<li><a href="https://www.facebook.com/Blood-Bank-Information-System-1568992976507861" class="fb" target="_blank" class="fb"> </a></li>
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
	<div class="h_bg">
		<div class="wrap">
			<div class="header">
				<div class="logo">
						
								</td>
							</tr>
						</table>
				</div>
			</div>
		</div>
	</div>

 <?php
    
    for($a=1;$a<=2;$a++)
        
    {
        echo'<br>';
    }
    
    
    ?>
    
		
		<div style=" height:auto">
			<form method="post" enctype="multipart/form-data">
				<table cellpadding="0" cellspacing="0" width="500px" style="margin:auto">
					<tr>
						<td> <div class="container well" style="margin-top: 50px">
                                <table cellpadding="0" cellspacing="0" width="800px" height="450px" style="margin:auto; border-color: blue">

                            <tr><td  align="center"><b style="font-size: x-large;color: #b0b0b0;"> List of BLOOD BANKS and ORGANIZATIONS Registered with us: </b></td></tr><br>

                                    <?php
								$cn=makeconnection();
								$s="SELECT * FROM `org_reg`";
								$result=mysqli_query($cn,$s);
								$r=mysqli_num_rows($result);
								$n=0;
								while($data=mysqli_fetch_array($result))
								{
							     ?>
								 <tr><td><br><br><div class="panel-body">
								 <table  cellpadding="0" cellspacing="0" width="630px" height="120px" style="margin:auto; border:none; border:0px solid blue;" class="tableborder">

                    <td width="500px" height="50px" style="vertical-align:top">
                        

                        <table align="center" cellpadding="0" width="430px" height="140px" style="border:none">
           <tr><td colspan="2">&nbsp;</td></tr>
                            <tr><td><span class="title">Name:</span></td><td>  <?php echo $data[0]; ?></td></tr>
                            <tr><td><span class="title">Incharge name:</span></td><td><?php echo $data[1]; ?></td></tr>
				 <tr><td><span class="title">Incharge contact No:</span></td><td><?php echo $data[2]; ?></td></tr>
                  <tr><td style="width:24px"><span class="title">Email id:</span></td><td><?php echo $data[3]; ?></td></tr>
                  <tr><td><span class="title">Address:</span></td><td><?php echo $data[4]; ?></td></tr>

                     <tr><td colspan="2">&nbsp;</td></tr>
                     
                     
                      </table>
									</td></tr>
								 </table>
                                         </div>
								 </td>
								 </tr>
								 <?php }
								 ?>
								 </table>
                            </div>
						</td>
					</tr>
				</table>
			</form>
		</div>
		
		<div>
			
<div class="footer">
	<div class="container">
		<div>
			<div class="col-md-4 ftr-grid">
				<h3>Navigation</h3>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="donar.php">Info Of Donor</a></li>
					<li><a href="Admin/index.php">Admin LogIn</a></li>
					<li><a href="login.php">Donor Login</a></li>
				 
				</ul>
			</div>
			
			<div class="col-md-7 ">
				
			</div>
			
	
		<div class="col-md-5 ftr-grid">
				<h3>Keep In Touch</h3>
				<div>
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
</body>
</html>