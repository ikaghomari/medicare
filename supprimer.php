<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/all.min.css">
    <title>Supprimer un donneur</title>
<style>
table, th, td {
    border: 2px solid ;
    border-collapse: collapse;
}
body {margin:0;}

.icon-bar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.icon-bar a {
  float: left;
  width: 20%;
  text-align: center;
  padding: 12px 0;
  transition: all 0.3s ease;
  color: white;
  font-size: 30px;
}

.icon-bar a:hover {
  background-color: #000;
}

.active {
  background-color: #CD5C5C;
}
</style>
</head>
<body>
    <div class="icon-bar">
          <a class="active" href="page admin.html"><i class="fas fa-sign-out-alt"></i></a> 
          <a href="afficher.php"><i class="fas fa-tv"></i></a> 
          <a href="ajouter.html"><i class="fas fa-plus-circle"></i></a> 
          <a href="modifier1.php"><i class="fas fa-edit"></i></a>
          <a href="supprimer.php"><i class="fas fa-trash-alt"></i></a> 
       </div>
<center>
    <br>
    <center><h2><p>Voici votre table des donneurs que vous avez :</p></h2></center><br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medical";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM service";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Numero</th><th>service</th><th>medecin</th><th>montant</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>". " " . $row["service"]. "</td><td>" . $row["medecin"]. "</td><td>" . $row["montant"]. "</td> <td><a href='delete.php?id=$row[id]'style='color:red; padding: 11px 25px;border: none ;color: ##CD5C5C;text-decoration:none; font-size:15px;'>Supprimer </a></td></tr>";
    }
    echo "</table>";

} 
else {
    echo "0 results";
}

$conn->close();
?>
</center>

</body>
</html>