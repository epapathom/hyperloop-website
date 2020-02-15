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
$list1 = array();
$list2 = array();

$sql1 = "SELECT stationID, city, country FROM stations JOIN routes ON stationID = routes.stationID_START;";
$sql2 = "SELECT stationID, city, country FROM stations JOIN routes ON stationID = routes.stationID_END ORDER BY routeID;";

$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);

if ($result1->num_rows > 0) {
    
    while($row = $result1->fetch_assoc()) {
        array_push($list1, "<tr><td>".$row["stationID"]."</td><td>".$row["city"]."</td><td>".$row["country"]."</td>");
    }
} 
else {
    echo "invalid data";
}

if ($result2->num_rows > 0) {
    
    while($row = $result2->fetch_assoc()) {
        array_push($list2, "<td>&rarr;</td><td>".$row["stationID"]."</td><td>".$row["city"]."</td><td>".$row["country"]."</td></tr>");
    }
} 
else {
    echo "invalid data";
}

foreach (range(0, count($list1)-1) as $i)
{
  array_push($list, $list1[$i] . $list2[$i]);
}

echo join("\n", $list);
?>