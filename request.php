
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
                
               <b style="font-size: x-large;color: #b0b0b0;">BLOOD-REQUEST</b> 
                
                   <form method="post" enctype="multipart/form-data">
                       
                       
                       
                       
                        <ul class="list-group">
            <li class="list-group-item">Name :</li>
            <li class="list-group-item"><input type="text" style="width:80%;height:5%" name="t1" required="required" Placeholder="Please enter your name" /></li>
                            
              <li class="list-group-item">Gender :</li>
            
                 <li class="list-group-item">
            
                 <label class="radio-inline">
               <input name="r1" type="radio" value="male" >Male
           </label>
                
                 <label class="radio-inline">
               <input name="r1" type="radio" value="female">Female
           </label>
            
            
            </li>
                            
                            
       
            <li class="list-group-item">Age :</li>
            <li class="list-group-item"><input  style="width:80%;height:5%" type="number" name="t2" required="required" pattern="/[2|3|4|5|6][0-9]"
                                                placeholder="Please enter your age" /></li>
     
            <li class="list-group-item">Mobile No :</li>
                            <li class="list-group-item"> <input style="width:80%;height:5%" type="number" name="t3"  required="required" placeholder="Please enter your mobile no." /></li>
                            
                            <li class="list-group-item">Select Blood Group :</li>
                            <li class="list-group-item">
                            <select style="width:50%;height:5%" name="t4" required><option value="">Select</option>
<?php
$cn=makeconnection();
$s="select * from bloodgroup";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	while($data=mysqli_fetch_array($result))
	{
		if(isset($_POST["show"])&& $data[0]==$_POST["s2"])
		{
			echo "<option value=$data[0] selected>$data[1]</option>";
		}
		else
		{
			echo "<option value=$data[0]>$data[1]</option>";
		}
		
		
		
	}
	mysqli_close($cn);
    

?>



</select>
                           

<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from bloodgroup where bg_id='" .$_POST["t4"] ."'";
	$result=mysqli_query($cn,$s);
	$r=mysqli_num_rows($result);
	//echo $r;
	$data=mysqli_fetch_array($result);
	$bg_id=$data[0];
	$bg_name=$data[1];
	
		
		
	mysqli_close($cn);
}
?>
                            
     </li>    
                            
                            <li class="list-group-item">Email :</li>
            <li  class="list-group-item"><input style="width:80%;height:5%" type="email" name="t5" required="required" /></li>
                            
                            
                            
                            
                            <li class="list-group-item">Till Required Date</li>
                            
                          <li class="list-group-item">     
                               <input type="date" name="date" required>
                          
                            
                            </li>
                            
                            
                            <li class="list-group-item">Comments :</li>
            <li  class="list-group-item"><textarea placeholder="TYPE HERE!" style="height:30%;width:80%" name="t7"></textarea></li>
                            
                            
                            
                            
                           
                       </ul>
                       
         
                
                <div>
                
                    <center>
                    
                    <input style="width:20%;height:5%"type="submit" value="SUBMIT" name="sbmt" style="border:0px; ">
                    
                    </center>
                    
                    
                
                
                </div>
         
              
                
         
         

</form>
                
                
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
			        	 	<p><a href="BBIS@gmail.com91 1800-265-2020">BBIS@gmail.com</a></p>
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




<?php
if(isset($_POST["sbmt"])) 
{
			
		
	$cn=makeconnection();
			$s="insert into requestes(name,gender,age,mobile,bgroup,email,reqdate,detail) values('" . $_POST["t1"] ."','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "','" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["date"] .  "','" .  $_POST["t7"]  ."')";
			
			
	$q=mysqli_query($cn,$s);
	mysqli_close($cn);
	if($q>0)
	{
	echo "<script>alert('Your request has been sent to the available donors. You can contact them as well through their contact details shown on the screen.');</script>";
	}
	else
	{echo "<script>alert('Saving Record Failed');</script>";
	}
		
		}	
	

?>

<?php 
if(isset($_POST["sbmt"]))
{
	//header("location:result.php?bg=".$_POST["s2"]);
	echo "<script>location.replace('result.php?bg=". $_POST["t4"] ." && temp=1 && name=". $_POST["t1"] ." && phone=".$_POST["t3"]." && email=".$_POST['t5']."');</script>";
}

?>
</body>
</html>
    
    
    