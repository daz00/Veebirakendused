
<?php
    $dbusername = "u179834919_admin";
    $dbpassword = "123456";
    $dbservername = "mysql.hostinger.ee";
	$dbname = "u179834919_baas";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Ühendus ebaõnnestus: " . $conn->connect_error);
} 

$sql = "SELECT Users.username, fame
FROM Users
LEFT JOIN Data ON Data.username = Users.username
WHERE Users.username = Data.username
ORDER BY fame DESC 
LIMIT 21 , 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<table id = 'tabel'><tr><th>#Nr</th><th>Kasutajanimi</th><th>Varad</th></tr>";
	$i = 21;
    while($row = $result->fetch_assoc()) {
       echo "<tr><td>".$i."</td><td>".$row["username"]."</td><td> ".$row["fame"]."</td></tr>";
	   $i = $i+1;
    }
	echo "</table>";
} else {
    echo "Ei saa edetabelit kuvada !";
}
$conn->close();
?>