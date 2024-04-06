<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
</head>
<body>

<h1>Welcome to My Blog</h1>

<?php
// Database connection
$servername = "localhost";
$username = "Towtik"; // Your MySQL username
$password = "Tess2020t"; // Your MySQL password
$dbname = "blog";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch posts from the database
$sql = "SELECT * FROM posts ORDER BY created_at DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["title"]. "</h2>";
        echo "<p>" . $row["content"]. "</p>";
        echo "<p>Published on: " . $row["created_at"]. "</p>";
        echo "<hr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
