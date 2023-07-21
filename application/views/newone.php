<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.form{
      width:300px;
      height:200px;
      border:2px solid black;
}
    </style>
</head>
<body>
   <div class= "form">
<?php echo validation_errors();?>
 -
  <?php echo form_open('welcome/neww'); ?>
    <label for="fname">User name</label>: <input type="text" placeholder=" enter your username" id="fname" name="fname" value=""><br>
     <label for="lname">Password</label>:<input type="text" placeholder="enter the password" id="lname" name="lname" value=""><br><br>

     <input type="submit" value="Submit">
   </form> 
</div>
</body>
</html>
<?php
//$name = $_POST['fname'];
//$pass = $_POST['lname'];
//echo $name;
//echo $pass;


?>