<!DOCTYPE html>
<html>
<head>
	<title>informations du patient</title>
	<meta charset="utf-8">
	  <link  rel="stylesheet" href='http://fonts.googleapis.com/css?family=Crete+Round'>
</head>
<style>
	 /* GENERAL */
*{
  margin: 0;
  padding: 0;
}

body{
  font-family: arial,sans-serif;
  font-size: 15px;
}


/* HEADER color */
header{
  height: 35px;
  background-color: #2D8D89;
}

h4{
 font-size: 32px;
}

#tab {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  margin-top: 70px;
  width: 48%;
  float: center;

}

#tab td, #tab th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tab tr:nth-child(even){background-color: #f2f2f2;}

#tab tr:hover {background-color: #ddd;}

#tab th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}

* { box-sizing: border-box; }
@import url('https://fonts.googleapis.com/css?family=Rubik:400,500&display=swap');


body {
  font-family: 'Rubik', sans-serif;
}

.container {
  display: flex;
  height: 100vh;
}

.left {
  overflow: hidden;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  animation-name: left;
  animation-duration: 1s;
  animation-fill-mode: both;
  animation-delay: 1s;
}

.form {
  max-width: 70%;
  display: flex;
  flex-direction: column;
}


.form-field {
  height: 44px;
  width: 250px;
  padding: 0 16px;
  border: 2px solid #ddd;
  border-radius: 4px;
  font-family: 'Rubik', sans-serif;
  outline: 0;
  transition: .2s;
  margin-top: 20px;
}

.form-field:focus {
  border-color: #2D8D89;
}

.animation {
  animation-name: move;
  animation-duration: .4s;
  animation-fill-mode: both;
  animation-delay: 0.3s;
}

.a3 {
  animation-delay: 0.3s;
}

.a4{
   animation-delay: 0.3s;
}
.a4:hover{
  background-color: #2D8D89;
}


@keyframes move {
  0% {
    opacity: 0;
    visibility: hidden;
    transform: translateY(-40px);
  }

  100% {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
}

@keyframes left {
  0% {
    opacity: 0;
    width: 0;
  }

  100% {
    opacity: 1;
    padding: 20px 40px;
    width: 440px;
  }
}

</style>
<body>

<header> </header>
 <br><br><br>
 <center><h4> les informations du patient :</h4></center>
 <center>
 <div id="tab">
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medicare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id=$_POST['id'];

$sql = "SELECT `id`, `Nom`, `prenom`, `montant`, `user`, `pass` FROM patient WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Id</th><th>Nom</th><th>Prénom</th><th>Montant</th><th>Nom d'utilisateur</th><th>Mot de passe</th><tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td>
                  <td>". " " . $row["Nom"]. "</td>
                  <td>" . $row["prenom"]. "</td>
                  <td>". $row["montant"]. "</td>
                  <td>". $row["user"]. "</td>
                  <td>" . $row["pass"]. "</td>
           
                  
              </tr>";
    }
    echo "</table>";

} 
else {
    echo "0 results";
}

$conn->close();
?>

  <br><br><br><br><br><br><br><br><br><br><br>
  <button class="form-field animation a4" onclick="window.print()">Imprimer la page</button>


</div>
</center>
</body>
</html>