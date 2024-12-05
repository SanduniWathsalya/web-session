<?php
//This display data in a table that we submit through the form
require 'db.php';

$sql = "SELECT * FROM contactus";
$result = mysqli_query($conn, $sql);

$table = "<table border='1' id='user_data'>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Delete</th>
            </tr>";

// Check if there are any rows
if (mysqli_num_rows($result) > 0) {

    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $table .= "
            <tr>
                <td>" . $row['id'] . "</td>
                <td>" . $row['fname'] . "</td>
                <td>" . $row['lname'] . "</td>
                <td>" . $row['email'] . "</td>
                <td>" . $row['mobile'] . "</td>
                <td>" . $row['msg'] . "</td>
                <td><a href='delete.php?id=".$row['id']."'>Delete</a></td>
            </tr>";
    }
} else {
    $table .= "0 results";
}

$table .= "</table>";

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
    <link rel="stylesheet" href="main.css">

</head>
<body>
    <?php echo $table; ?>
</body>
</html>
