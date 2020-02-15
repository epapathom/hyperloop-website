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

$tickets = array();

$from = $_POST["from"];
$to = $_POST["to"];

$sql = "SELECT date, departure_time, arrival_time, seatNo, class, price FROM tickets 
JOIN schedule ON tickets.tscheduleID = schedule.scheduleID WHERE schedule.sstationID_START = '$from' AND schedule.sstationID_END = '$to';";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
        array_push($tickets, "<tr><td>".$row["date"]."</td><td>".$row["departure_time"]."</td><td>".$row["arrival_time"]."</td><td>".$row["seatNo"]."</td><td>".$row["class"]."</td><td>".$row["price"]."</td><td><a class='waves-effect waves-light btn-small'>Buy</a></td></tr>");
    }

    echo join("\n", $tickets);
} 
else {
    echo "0";
}
?>