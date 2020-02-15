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

$list = array();

$sql = "SELECT scapsuleID, sstationID_START, sstationID_END, date, departure_time, arrival_time FROM schedule;";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        array_push($list, "<tr><td>".$row["scapsuleID"]."</td><td>".$row["sstationID_START"]."</td><td>".$row["sstationID_END"]."</td><td>".$row["date"]."</td><td>".$row["departure_time"]."</td><td>".$row["arrival_time"]."</td></tr>");
    }
    
    echo join("\n", $list);
} 
else {
    echo "invalid data";
}
?>