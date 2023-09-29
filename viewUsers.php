<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Your Page Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
</html>
<?php
$host = '127.0.0.1:3307';
$username = 'root';
$password = '';
$dbname = 'myDatabase';

try {
    // Create a PDO instance
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch all users from the database
    $stmt = $pdo->query("SELECT * FROM usertable");
  

    echo "<h2>Users</h2>";
    echo "<table>";
    echo"<tr><th>ID</th><th>First Name</th> <th>Last Name</th><th>Email</th><th>Phone Number</th> <th>Username</th> <th>Create Password</th> <th>Confirm Password</th>";
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
        echo "<tr>";
        echo "<td>{$row['id']}</td>";
        echo "<td>{$row['firstname']}</td>";
        echo "<td>{$row['lastname']}</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['phone']}</td>";
        echo "<td>{$row['username']}</td>";
        echo "<td>{$row['create_password']}</td>";
        echo "<td>{$row['confirm_password']}</td>";
        echo "</tr>";
    }
    echo "</table>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
