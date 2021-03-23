
<!DOCTYPE html>
<html>
<head>
  <title> ajout patient</title>

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
  width: 100%;
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
  width: 100px;
  height: 100px;
  margin-top:20px;
  margin-left: 60px;
} 

#content div{
  display: inline-block;
}

.icon-bar {
  width: 380px;
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

 .icon-bar .red:hover{
  color: #F72E12;
}

.icon-bar a:hover {
  color:black;
}

.icon-bar .pat{
  border-bottom: 1px solid #2D8D89; 
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
         <h1>Coté Secrétaire:</h1>
           <nav>
           <ul>
            <li><a href="medical.html">accueil</a></li>
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
      <img src="css/image/icone.png"><br>
     
       <div class="icon-bar">
          <a class="red" href="index.html"><i class="fas fa-home"></i> sortir</a> 
          <a class="pat" href="ajouterS.php"><i class="fas fa-user-plus"></i> ajouter patient</a> 
          <a href="imprimer.php"><i class="fas fa-print"></i> imprimer</a>
           <a class="aff" href="afficherS.php"><i class="fas fa-table"></i> afficher table patient</a>
          <a href="rapport.php"><i class="fas fa-edit"></i> ecrire rapport</a> 
       </div>
      
        <div class="ajout">
    
<?php 

  
  $Nom=$_POST['Nom'];
  $prenom=$_POST['prenom'];
  $birthday=$_POST['birthday'];
   $lieu=$_POST['lieu'];
  $adresse=$_POST['adresse'];
  $ville=$_POST['ville'];
   $willaya=$_POST['willaya'];
     $type=$_POST['type'];
  $medecin=$_POST['medecin'];

  $service=$_POST['service'];
   $serv="";
   foreach($service as $se)
   {
        $serv .= $se." ";
    }

  $montant=$_POST['montant'];
   $hobbies="";
   foreach($montant as $stp)
   {
        $hobbies .= $stp." ";
    }
   $user=$_POST['user'];
  $pass=$_POST['pass'];


    if( !empty($Nom) || !empty($prenom) || !empty($birthday)|| !empty($lieu) || !empty($adresse) || !empty($ville) || !empty($willaya) || !empty($medecin) || !empty($service) || !empty($montant)|| !empty($user)  || !empty($pass)){
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbname = "medicare";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

        if (mysqli_connect_error()) {
          die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
        }else{
          $qry = "INSERT Into patient (Nom,prenom,birthday,lieu,adresse,ville,willaya,type,medecin,service,montant,user,pass) values(' $Nom', '$prenom' , '$birthday' , '$lieu' , '$adresse' , '$ville' , '$willaya' , '$type' , '$medecin' , '$serv', '$hobbies' ,'$user', '$pass' )";
          
          $result = mysqli_query($conn,$qry); //query executes

            echo '<h2>Le nouveau patient a été bien ajouté</h2> ';
          }
                          
          }
          $conn->close();



 ?>
</div>
     </div>
  
   

  


</body>
</html>





