
<?php
include('admin/function.php');
$cn=makeconnection();
		if(isset($_POST["sbmt"])) {
            $dob = $_POST["t2"];
            $current_date = date('Y-m-d');
            $dobex = explode("-", $dob);
            //echo $dobex[0];

            $cbex = explode("-", $current_date);
            //echo $cbex[0];
            //echo $cbex[1];
            $interval = (mktime(0, 0, 0, $cbex[1], $cbex[2], $cbex[0]) - mktime(0, 0, 0, $dobex[1], $dobex[2], $dobex[0])) / 86400;
            $ageff = $interval / 365.242199;
            $age = (int)$ageff;
            //echo $age;
            if ($age >= 17) {

                $query = "SELECT * FROM `donarregistration`";
                $result = mysqli_query($cn, $query) or die("ERROR IN QUERY");
                $count = 0;
                while ($r = mysqli_fetch_array($result)) {
                    if ($r['email'] == $_POST["t5"]) {
                        $count++;
                    }
                }

                //echo "<script>alert('".$count."');</script>";
                if ($count == 0) {
                    if ((($_FILES["t8"]["type"] == "image/gif") || ($_FILES["t8"]["type"] == "image/png") || ($_FILES["t8"]["type"] == "image/jpg") || ($_FILES["t8"]["type"] == "image/jpeg") || ($_FILES["t8"]["type"] == "image/pjpeg")) && ($_FILES["t8"]["size"] < 5000000)) {
                        if ($_FILES["t8"]["size"] > 5000000) {
                            echo "<script>alert('Image File cannot be more than 5 MB.');
                                        window.location.href='registration.php';</script>";
                            exit(0);
                        }
                        $ext = $_FILES["t8"]["type"];
                        $ext1 = explode("/", $ext);

                        if ($_FILES["t8"]["error"] > 0) {
                            echo "Return Code: " . $_FILES["t8"]["error"] . "<br />";
                        } else {
                            $uploaddir = 'donor_pic/';
                            if (is_uploaded_file($_FILES['t8']['tmp_name'])) {
                                $filname = basename($_FILES['t8']['name']);
                                $uploadfile = $uploaddir . basename($_FILES["t8"]["name"]);
                                if (move_uploaded_file($_FILES['t8']['tmp_name'], $uploadfile)) {

                                    $cn = makeconnection();
                                    $s = "insert into donarregistration(name,gender,age,mobile,b_id,email,pwd,pic,address) values('" . $_POST["t1"] . "','" . $_POST["r1"] . "','" . $_POST["t2"] . "','" . $_POST["t3"] . "',
								'" . $_POST["t4"] . "','" . $_POST["t5"] . "','" . $_POST["pass"] . "','" . basename($_FILES["t8"]["name"]) . "','" . $_POST["add"] . "')";
                                    mysqli_query($cn, $s) or die("ERROR IN QUERY.");


                                    echo "<script>alert('Successfully Registered as a Donor'); window.location.href='index.php';</script>";

                                } else {
                                    echo "<script>alert('sorry there was an error uploading your file..'); window.location.href='registration.php';</script>";
                                }
                            }
                        }
                    }
                } else {
                    echo "<script>alert('Donor with the same email already exists.'); window.location.href='registration.php';</script>";
                }


            }
            else {
                echo "<script>alert('Donor must be atleast 17 years old to donate blood.'); window.location.href='registration.php';</script>";
            }

        }
		?>