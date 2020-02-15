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

$info = array();

$driverID = $_POST["driverID"];

$sql = "SELECT driverID, first_name, last_name, scapsuleID, name, srouteID, date, departure_time, arrival_time FROM drivers 
JOIN schedule ON schedule.sdriverID = drivers.driverID JOIN capsules ON capsules.capsuleID = schedule.scapsuleID WHERE drivers.driverID = '$driverID';";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        array_push($info, "<tr><td>".$row["driverID"]."</td><td>".$row["first_name"]."</td><td>".$row["last_name"]."</td><td>".$row["scapsuleID"]."</td><td>".$row["name"]."</td><td>".$row["srouteID"]."</td><td>".$row["date"]."</td><td>".$row["departure_time"]."</td><td>".$row["arrival_time"]."</td></tr>");
    }

    echo join("\n", $info);
} 
else {
    echo "0";
}
?>