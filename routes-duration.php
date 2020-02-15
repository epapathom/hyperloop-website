<?php
$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "hyperloop";

// Create connection.
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Check connection.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$from = $_POST["from"];
$to = $_POST["to"];

$sql = "SELECT duration FROM routes WHERE stationID_START = '$from' AND stationID_END = '$to';";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        $duration = $row["duration"];
        echo $duration;
    }
} 
else {
    echo "0";
}
?>