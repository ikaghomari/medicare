<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <link rel="stylesheet" href="css/all.min.css">
    <link  rel="stylesheet" href='http://fonts.googleapis.com/css?family=Crete+Round'>
    

    <title>resultat de modification</title>

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

body{
  margin: 0 auto;
  background-image: url("../photo/coeur.jpg");
  background-repeat: no-repeat;
  background-size: 100% 660px;
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

.icon-bar .modif{
  border-bottom: 1px solid #2D8D89; 
}

.icon-bar a:hover {
  color:black;
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


</style>


</head>
<body>
   <header>  </header>

     <section id="head">
      <div class="wrapper">
         <h1>Cot?? admin:</h1>
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

     <br>
  
  <div id="content">
      <div class="icon-bar">
          <a class="active" href="medical.html"><i class="fa fa-home"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sortir</a> 
          <a href="afficherService.php"><i class="fas fa-tv"></i>&nbsp;&nbsp;&nbsp;&nbsp;Afficher les services</a> 
          <a  href="ajouterService.html"><i class="fas fa-plus-circle"></i></i>&nbsp;&nbsp;&nbsp;&nbsp;Ajouter un service</a> 
          <a class="modif" href="modifierService1.php"><i class="fas fa-edit"></i>&nbsp;&nbsp;&nbsp;&nbsp;Modifier la table service</a>
          <a href="supprimerService1.php"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;&nbsp;&nbsp;Supprimer un service</a> 
           <a lass="aff" href="afficherPatient.php"><i class="fas fa-list"></i>&nbsp;&nbsp;&nbsp;&nbsp;Aficher liste des patients</a>
      </div>


      <div >

 <?php
$objetPdo = new PDO('mysql:host=localhost;dbname=medicare','root','');

$pdoStat=$objetPdo->prepare('UPDATE service set service=:service, medecinS=:medecinS, montant=:montant WHERE numero=:num LIMIT 1');

$pdoStat->bindValue(':num', $_POST['numero'], PDO::PARAM_INT);
$pdoStat->bindValue(':service', $_POST['service'], PDO::PARAM_STR);
$pdoStat->bindValue(':medecinS', $_POST['medecinS'], PDO::PARAM_STR);
$pdoStat->bindValue(':montant', $_POST['montant'], PDO::PARAM_STR);


$executeIsOk = $pdoStat->execute();

if ($executeIsOk) {
  $message= 'les informations ont ??t?? bien modifi??es';
}else{
  $message= 'Echec de la mise a jour ';
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>

  <center><br><br><br><br><br><br>
  <h1>Resultat de la modification</h1>
  <br><br>
  
  <p><?= $message ?></p>
</center>


      
      </div>
  

</body>
</html>








