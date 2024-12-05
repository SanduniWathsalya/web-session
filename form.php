<?php
require 'db.php';
if (isset($_POST['fname'])){
    
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      $msg=$_POST['msg'];


$sql = "INSERT INTO contactus (fname, lname, email, mobile, msg)
VALUES ('".$fname."', '".$lname."', '".$email."', '".$mobile."', '".$msg."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}
?>

<html>
    <head>Contact us</head>

    <body>
    <form action="" method="POST">
    <table>
    <tr>
        <td>First name</td>
        <td><input type="text" id="fname" name="fname" ></td>
    </tr>
    <tr>
        <td>Last name</td>
        <td><input type="text" id="lname" name="lname" ></td>
    </tr>
    <tr>
        <td>Emai</td>
        <td><input type="email" id="email" name="email" ></td>
    </tr>
    <tr>
        <td>Mobile</td>
        <td><input type="text" id="mobile" name="mobile" ></td>
    </tr>
    <tr>
        <td>Message</td>
        
<td><textarea id="msg" name="msg" rows="4"></textarea></td>

    </tr>
    <tr>
        <td> <input type="submit" value="Submit"></td>
        <td><input type="reset" value="reset"></td>
    </tr>
</table>
</form> 
    </body>
</html>