<?php
if(isset($_POST['sbtn']))
{
    $email=$_POST['email'];
    include('function.php');
$cn=makeconnection();
	$query="SELECT * FROM `donarregistration` WHERE `email`='".$email."'";
	$result=mysqli_query($cn,$query);
	if(mysqli_num_rows($result)>0)
    {
        $r=mysqli_fetch_array($result);
        $pass=$r['pwd'];
        $name=$r['name'];
        ini_set('max_execution_time',300);
        $header="From:bbis.ku17@gmail.com";
        mail($email,"Password Recovery","Hellow $name, your password is $pass. You can access your account using this password.",$header);
        echo "<script>alert('You will recieve a mail from us shortly.'); window.location.href='login.php';</script>";
    }
    else{
        
									echo "<script>alert('Incorrect Email'); window.location.href='forgot.php';</script>";
    }
}
else{
    header("location:index.php");
}
?>