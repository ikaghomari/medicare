
<!DOCTYPE html>
<html>
<head>
  <title>consultation finale</title>

  <link rel="stylesheet" a href="css/secretaire1.css">
  <meta charset="utf-8">
  <link rel="stylesheet" a href="css/all.min.css">
  <link  rel="stylesheet" href='http://fonts.googleapis.com/css?family=Crete+Round'>
  
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

.wrapper{
  width: 940px;
  margin: 0 auto;
  padding: 0 10px;
}

a{
  text-decoration: none;
  color:#444;
}
/* HEADER */

/* HEADER color */
header{
  height: 35px;
  background-color: #2D8D89;
}

/* HEADER */

#head{
  height: 100px;
  
    
}

#head h1{
  font-family: 'Crete Round',serif;
  font-size: 45px;
  color:#444;
    float: left;
  margin-top:15px;
}

#head nav{
  float:right;
  margin-top: 40px;
}

ul{
  list-style: none;
}

#head nav ul li{
  display: inline-block;
  margin-right: 20px;
  float: left;
  margin-bottom: 10px;
}

#head nav ul li :hover {
  border-bottom: 2px solid ;
  border-color: #53C6C6;
 
  
  }

#head nav ul li a{
  text-transform: uppercase;
  font-weight: bold;

}

 img{
  width: 299px;
  height: 270px;
  margin-top:20px;
  margin-left: 100px;
} 

#content div{
  display: inline-block;
}


#form{
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 45%;
  margin-left: -100px;

}

#form td, #form th {
  border: 1px solid #ddd;
  padding: 8px;
}

#form tr:nth-child(even){background-color: #f2f2f2;}

#form tr:hover {background-color: #ddd;}

#form th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


#form{
  margin-top: 40px;
 
}

h3{
  font-family: 'Crete Round',serif;
  font-size: 25px;
  color:#186E62;
  text-decoration: underline;
  text-transform: uppercase;
}

#form p{
   font-family: 'Crete Round',serif;
  font-size: 20px;
  color:#444;

}
#form .clr{
  color :#104A4A;
}

.form-field {
  height: 44px;
  width: 160px;
  padding: 0 16px;
   font-family: 'Crete Round',serif;
   font-size: 15px;
  border: 2px solid #ddd;
  border-radius: 4px;
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

.icon-bar {
  width: 350px;
  margin-top: 30px;
  margin-right: 300px;
   vertical-align: top;
}





  </style>

</head>
<body> 
    <header>  </header>

     <section id="head">
      <div class="wrapper">
         <h1>Dossier m??dical:</h1>
           <nav>
           <ul>
            <li><a href="index.html">accueil</a></li>
            <li><a href="patient.html">patient</a></li>
            <li><a href="consultation.php">consultation</a></li>
            <li><a href="login.html">admin</a></li>
            <li><a href="secretaire1.html">secr??taire</a></li>
            <li><a href="consultationM.php">M??decin</a></li>

           </ul>
         </nav>
        </div>

   </section>


 <div id="content">
    
     <div class="icon-bar">
       <img src="css/image/img.jpg">
       </div>

    


     <div id="form"> 
      <center> <h3>Voici votre dossier m??dical :</h3> </center>
     <br><br>

     <?php

$Num=$_POST['Num'];


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

$sql = "SELECT * FROM patient WHERE id=$Num";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>Nom</th><th>Pr??nom</th><th>Type patient</th><th>Services</th><th>M??decin traitant</th><th>Date de consultation</th><th>Consultation</th><th>Rapport medical</th><tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                  <td>". " " . $row["Nom"]. "</td>
                  <td>" . $row["prenom"]. "</td>
                   <td>" . $row["type"]. "</td>
                  <td>" . $row["service"]. "</td>
                  <td>" . $row["medecin"]. "</td>
                  <td>". " " . $row["dateC"]. "</td>
                  <td>". " " . $row["consult"]. "</td>
                  <td>". " " . $row["rapport"]. "</td>
              </tr>";
    }
    echo "</table>";

} 
else {
    echo "0 results";
}

$conn->close();
?>


     <br><br><br><br>
    
     
     <form class="btn" method="POST" action="index.html">
      <center> <p class="clr">Si vous voulez sortir <br> clicker ici:</p>
     <input type="submit" class="form-field animation a4" value="Sortir"></center>
     </form>
     
     
     </div>



     
</div>
   

  


</body>
</html>





