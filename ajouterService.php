<html>
<head>
    <meta charset="utf-8">
    <title>Ajouter</title>
      <link rel="stylesheet" href="css/all.min.css">
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

div#content div{
  display: inline-block;
}

.icon-bar {
  width: 450px;
  margin-top: 30px;
  margin-right: 300px;
   vertical-align: top;
}

.icon-bar a {
  display: block;
  padding: 13px;
  margin-left:40px ;
  transition: all 0.3s ease;
  font-size: 25px;
}

.icon-bar .active{
  color: #F72E12;
}

.icon-bar .ajt{
  border-bottom: 1px solid #2D8D89; 
}

.icon-bar a:hover {
  color:black;
}

.ajout{
  color: #444;
  margin-top: 140px;
  padding: 20px;
  border: 2px solid  #2D8D89;
}

</style>
</head>
<body>
   
   <header>  </header>

     <section id="head">
      <div class="wrapper">
         <h1>Coté admin:</h1>
           <nav>
           <ul>
              <li><a href="index.html">accueil</a></li>
              <li><a href="patient.html">patient</a></li>
              <li><a href="consultation.php">consultation</a></li>
              <li><a href="login.html">admin</a></li>
              <li><a href="secretaire1.html">secrétaire</a></li>
              <li><a href="consultationM.php">Médecin</a></li>

           </ul>
         </nav>
      </div>

   </section>
    <div id="content">
      <div class="icon-bar">
          <a class="active" href="medical.html"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sortir</a> 
          <a href="afficherService.php"><i class="fas fa-tv"></i>&nbsp;&nbsp;&nbsp;&nbsp;Afficher les services</a> 
          <a class="ajt" href="ajouterService.html"><i class="fas fa-plus-circle"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un service</a> 
          <a href="modifierservice1.php"><i class="fas fa-edit"></i>&nbsp;&nbsp;&nbsp;&nbsp;Modifier la table service</a>
          <a href="supprimerService1.php"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un service</a> 
           <a lass="aff" href="afficherPatient.php"><i class="fas fa-list"></i>&nbsp;&nbsp;&nbsp;&nbsp;Aficher liste des patients</a>


       </div>

       <div class="ajout">
    
<?php 

  
  $service=$_POST['service'];
  $medecinS=$_POST['medecinS'];
  $montant=$_POST['montant'];
  


    if( !empty($service) || !empty($medecinS) || !empty($montant)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "medicare";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()) {
          die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
        }else{
          $qry = "INSERT Into service (service, medecinS, montant) values(' $service', '$medecinS' , '$montant' )";
          
          $result = mysqli_query($conn,$qry); //query executes

            echo '<h2>Le nouveau service a été bien ajouté</h2> ';
          }
                          
          }
          $conn->close();



 ?>
   
 </div>
</body>
 </html>