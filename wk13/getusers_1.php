<?php
$servername = "138.197.158.231";
$username = "localhost";
$password = "28ae7226b9eda875212f024771d17c7698235e6e59654133";
$dbname = "mySchema";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM users where active = '1';";
$result = $conn->query($sql);


?>
<!DOCTYPE>
<html lang="en">
<head>
    <title>User Authentication</title>
</head>
<body>
<h1>Weak Password</h1>
<form method="post" action="loginForm.php">
    <input type="text" name="username" value="host">
    <br/>
    <input type="submit">
</form>
<?php
echo "<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Active</th>
    </tr>";

    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['active'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    $conn->close();
    ?>
</body>
</html>