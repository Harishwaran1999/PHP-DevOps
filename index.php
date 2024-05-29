<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP App</title>
</head>
<body>
    <h1>PHP Application</h1>
    <?php
    // MySQL database connection
    $host = 'php-app-data.clcmom6m8aky.us-east-2.rds.amazonaws.com';
    $username = 'admin';
    $password = 'admin12345';
    $database = 'php-app-data';
    $conn = new mysqli($host, $username, $password, $database);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Fetching data from MySQL database
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        echo "<ul>";
        while($row = $result->fetch_assoc()) {
            echo "<li>" . $row["name"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "0 results";
    }
    
    // Close MySQL connection
    $conn->close();
    ?>
</body>
</html>
