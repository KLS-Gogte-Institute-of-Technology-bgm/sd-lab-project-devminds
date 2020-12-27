<link href="css/style.css" rel="stylesheet" type="text/css">
<br><br>

<div class="container">
<h1><br>Reservations<br></h1>   

<?php
echo "<table class='center' style='border: solid 1px black;'>";
echo "<tr><th>Reservation ID</th><th>Firstname</th><th>Lastname</th><th>Number of guests</th><th>Date</th><th>Time</th><th>Phone</th><th>Occassion</th><th>Booking time</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "root";
$dBpassword = "";
$dbname = "loginsystem";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $dBpassword);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT reserv_id,f_name,l_name,num_guests,rdate,time_zone,telephone,comment,reg_date FROM reservation");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>

