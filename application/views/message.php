<html>
<head>
<title>My Form</title>
<style>

            h3{

            }



</style>
</head>
<body>

<h3>Your form was successfully submitted!</h3>

<p><?php echo anchor('form', 'Try it again!'); ?></p>
<h4>

<?php

$name=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$num=$_POST['number'];
$dob=$_POST['numeric'];

echo 'first name='.$name;
echo "<br><br><br>";
echo 'lastname='.$lname;
echo "<br><br><br>";
echo 'email='.$email;
echo "<br><br><br>";
echo 'password='.$password;
echo "<br><br><br>";
echo 'confirm pass='.$cpassword;
echo "<br><br><br>";
echo 'contact number='.$num;
echo "<br><br><br>";
echo 'date of birth='.$dob;

?>

    <h4>
</body>
</html>