
<?php
include('admin/function.php');
$cn=makeconnection();
		if(isset($_POST["sbmt"]))
		{
			$query="SELECT * FROM `org_reg`";
							$result=mysqli_query($cn,$query) or die("ERROR IN QUERY");
							$count=0;
							while($r=mysqli_fetch_array($result))
							{
								if($r['email']==$_POST["email"])
								{
									$count++;
								}
							}
							
							//echo "<script>alert('".$count."');</script>";
							if($count==0)
							{
								$cn=makeconnection();
								$s="INSERT INTO `org_reg`(`name`, `inc_name`, `phone`, `email`, `address`) values('" . $_POST["name"] ."','" . $_POST["inc_name"] . "','" . $_POST["contact"] . "','" . $_POST["email"] . "','" . $_POST["add"].  "')";
								mysqli_query($cn,$s) or die("ERROR IN QUERY.");

								
									echo "<script>alert('Successfully Registered to our System'); window.location.href='index.php';</script>";

							//echo $s;
							}

							else
							{
								echo "<script>alert('organization or Blood-bank with the same email already exists.'); window.location.href='registration.php';</script>";
							}
							
							
		}
		?>