<?php

require "./app/config/conn.php";

$query = $conn->query("SELECT COUNT(*) as cantidad from usuarios");
$query = $query->fetch_assoc();

print_r($query);

//$result = $mysqli->query("SELECT COUNT(*) AS cityCount FROM myCity")
//$row = $result->fetch_assoc();
//echo $row['cityCount']." rows in table myCity.";

?>