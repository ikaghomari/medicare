
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
  width: 350px;
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
  width: 190px;
  padding: 0 16px;
  margin-right: 15px;
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
          <a href="afficherS.php"><i class="fas fa-table"></i> afficher table patient</a>
          <a href="rapport.php"><i class="fas fa-edit"></i> ecrire rapport</a> 
       </div>
      
      <div class="form">
      <form method="POST" action="addS.php">
      <b>Nom : </b><input type="text" class="form-field animation a3"  name="Nom" placeholder="Nom du patient" required>

      <b>Prénom : </b><input type="text" class="form-field animation a3"  name="prenom" placeholder="Prénom du patient" required><br>

      <b>Date de naissance:</b><input type="date"  class="form-field animation a3" name="birthday" required><br>

      <b>Lieu de naissance:</b>
                    <select id="lieu" name="lieu" class="form-field animation a3" size="1" required>
                         <option value="Adrar">Adrar</option>
                   <option value="Chlef">Chlef</option>
                   <option value="Laghouat">Laghouat</option>
                   <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                   <option value="Batna">Batna </option>
                     <option value="Béjaïa">Béjaïa</option>
                   <option value="Biskra">Biskra</option>
                     <option value="Béchar">Béchar</option>
                   <option value="Blida">Blida </option>
                   <option value="Bouira">Bouira</option>
                     <option value="Tamanrasset">Tamanrasset</option>
                     <option value="Tébessa">Tébessa</option>
                     <option value="Tlemcen">Tlemcen</option>
                   <option value="Tiaret">Tiaret</option>
                   <option value="Tizi Ouzou">Tizi Ouzou </option>
                   <option value="Alger">Alger</option>
                   <option value="Djelfa">Djelfa </option>
                   <option value="Jijel">Jijel</option>
                   <option value="Sétif">Sétif </option>
                   <option value="Saïda">Saïda</option>
                   <option value="Skikda">Skikda</option>
                   <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
                   <option value="Annaba">Annaba</option>
                   <option value="Guelma">Guelma</option>
                   <option value="Constantine">Constantine</option>
                   <option value="Médéa">Médéa</option>
                   <option value="Mostaganem">Mostaganem</option>
                   <option value="M'Sila">M'Sila</option>
                   <option value="Mascara">Mascara</option>
                   <option value="Ouargla">Ouargla </option>
                   <option value="Oran">Oran  </option>
                   <option value="El Bayadh">El Bayadh</option>
                   <option value="Illizi">Illizi</option>
                   <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
                   <option value="Boumerdès">Boumerdès</option>
                   <option value="El Tarf">El Tarf</option>
                   <option value="Tindouf">Tindouf </option>
                   <option value="Tissemsilt">Tissemsilt</option>
                   <option value="El Oued">El Oued</option>
                   <option value="Khenchela">Khenchela</option>
                   <option value="Souk Ahras">Souk Ahras</option>
                   <option value="Tipaza">Tipaza</option>
                   <option value="Mila">Mila</option>
                   <option value="Aïn Defla">Aïn Defla</option>
                   <option value="Naâma">Naâma
                   </option> <option value="Aïn Témouchent">Aïn Témouchent </option>
                   <option value="Ghardaïa">Ghardaïa</option>
                   <option value="Relizane">Relizane</option>
                  </select>
                  <br>

                  <b>Adresse : </b><textarea type="text" name="adresse" class="form-field animation a3" placeholder="Rue No boite postale" required></textarea>
                  <br>

                  <b>Ville : </b>
                    <select id="ville" class="form-field animation a3" name="ville" size="1" required>
                         <option value="Adrar">Adrar</option>
                   <option value="Chlef">Chlef</option>
                   <option value="Laghouat">Laghouat</option>
                   <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                   <option value="Batna">Batna </option>
                     <option value="Béjaïa">Béjaïa</option>
                   <option value="Biskra">Biskra</option>
                     <option value="Béchar">Béchar</option>
                   <option value="Blida">Blida </option>
                   <option value="Bouira">Bouira</option>
                     <option value="Tamanrasset">Tamanrasset</option>
                     <option value="Tébessa">Tébessa</option>
                     <option value="Tlemcen">Tlemcen</option>
                   <option value="Tiaret">Tiaret</option>
                   <option value="Tizi Ouzou">Tizi Ouzou </option>
                   <option value="Alger">Alger</option>
                   <option value="Djelfa">Djelfa </option>
                   <option value="Jijel">Jijel</option>
                   <option value="Sétif">Sétif </option>
                   <option value="Saïda">Saïda</option>
                   <option value="Skikda">Skikda</option>
                   <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
                   <option value="Annaba">Annaba</option>
                   <option value="Guelma">Guelma</option>
                   <option value="Constantine">Constantine</option>
                   <option value="Médéa">Médéa</option>
                   <option value="Mostaganem">Mostaganem</option>
                   <option value="M'Sila">M'Sila</option>
                   <option value="Mascara">Mascara</option>
                   <option value="Ouargla">Ouargla </option>
                   <option value="Oran">Oran  </option>
                   <option value="El Bayadh">El Bayadh</option>
                   <option value="Illizi">Illizi</option>
                   <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
                   <option value="Boumerdès">Boumerdès</option>
                   <option value="El Tarf">El Tarf</option>
                   <option value="Tindouf">Tindouf </option>
                   <option value="Tissemsilt">Tissemsilt</option>
                   <option value="El Oued">El Oued</option>
                   <option value="Khenchela">Khenchela</option>
                   <option value="Souk Ahras">Souk Ahras</option>
                   <option value="Tipaza">Tipaza</option>
                   <option value="Mila">Mila</option>
                   <option value="Aïn Defla">Aïn Defla</option>
                   <option value="Naâma">Naâma
                   </option> <option value="Aïn Témouchent">Aïn Témouchent </option>
                   <option value="Ghardaïa">Ghardaïa</option>
                   <option value="Relizane">Relizane</option>
                  </select>
                  

                <b>Willaya : </b>
                    <select id="willaya" class="form-field animation a3" name="willaya" size="1" required>
                         <option value="01-Adrar">01-Adrar</option>
                   <option value="02-Chlef">02-Chlef</option>
                   <option value="03-Laghouat">03-Laghouat</option>
                   <option value="04-Oum El Bouaghi">04-Oum El Bouaghi</option>
                   <option value="05-Batna">05-Batna </option>
                     <option value="06-Béjaïa">06-Béjaïa</option>
                   <option value="07-Biskra">07-Biskra</option>
                     <option value="08-Béchar">08-Béchar</option>
                   <option value="09-Blida">09-Blida </option>
                   <option value="10-Bouira">10-Bouira</option>
                     <option value="11-Tamanrasset">11-Tamanrasset</option>
                     <option value="12-Tébessa">12-Tébessa</option>
                     <option value="13-Tlemcen">13-Tlemcen</option>
                   <option value="14-Tiaret">14-Tiaret</option>
                   <option value="15-Tizi Ouzou">15-Tizi Ouzou </option>
                   <option value="16-Alger">16-Alger</option>
                   <option value="17-Djelfa">17-Djelfa </option>
                   <option value="18-Jijel">18-Jijel</option>
                   <option value="19-Sétif">19-Sétif </option>
                   <option value="20-Saïda">20-Saïda</option>
                   <option value="21-Skikda">21-Skikda</option>
                   <option value="22-Sidi Bel Abbès">22-Sidi Bel Abbès</option>
                   <option value="23-Annaba">23-Annaba</option>
                   <option value="24-Guelma">24-Guelma</option>
                   <option value="25-Constantine">25-Constantine</option>
                   <option value="26-Médéa">26-Médéa</option>
                   <option value="27-Mostaganem">27-Mostaganem</option>
                   <option value="28-M'Sila">28-M'Sila</option>
                   <option value="29-Mascara">29-Mascara</option>
                   <option value="30-Ouargla">30-Ouargla </option>
                   <option value="31-Oran">31-Oran  </option>
                   <option value="32-El Bayadh">32-El Bayadh</option>
                   <option value="33-Illizi">33-Illizi</option>
                   <option value="34-Bordj Bou Arreridj">34-Bordj Bou Arreridj</option>
                   <option value="35-Boumerdès">35-Boumerdès</option>
                   <option value="36-El Tarf">36-El Tarf</option>
                   <option value="37-Tindouf">37-Tindouf </option>
                   <option value="38-Tissemsilt">38-Tissemsilt</option>
                   <option value="39-El Oued">39-El Oued</option>
                   <option value="40-Khenchela">40-Khenchela</option>
                   <option value="41-Souk Ahras">41-Souk Ahras</option>
                   <option value="42-Tipaza">42-Tipaza</option>
                   <option value="43-Mila">43-Mila</option>
                   <option value="44-Aïn Defla">44-Aïn Defla</option>
                   <option value="45-Naâma">45-Naâma</option> 
                   <option value="46-Aïn Témouchent">46-Aïn Témouchent </option>
                   <option value="47-Ghardaïa">47-Ghardaïa</option>
                   <option value="48-Relizane">48-Relizane</option>
                  </select>
                   <br><br>

                   <b>Type patient : </b><input type="radio"   name="type" value="Homme" checked="checked" >Homme
                                         <input type="radio" name="type" value="Femme">Femme
                                         <input type="radio" name="type" value="FemmeE">Femme Enseinte
                                         <input type="radio" name="type" value="Enfant">Enfant
                                          <input type="radio" name="type" value="NvNé">Nouveau né
                    <br>

                    <b>Médecin traitant : </b><input type="text" class="form-field animation a3"  name="medecin" placeholder="Nom du médecin traitant" required>
                     <br>

 <?php

$servername="localhost";
$uname="root";
$pass="";
$db="medicare";

$conn = new PDO("mysql:host=$servername;dbname=$db",$uname,$pass);
$sql="select service , montant from service";

try
{
  $stmt=$conn->prepare($sql);
  $stmt->execute();
  $results=$stmt->fetchAll();
}

 catch (Exception $ex)
 {
  echo($ex -> getMessage());
 }

?>
 
 <b>services:</b>
      <select class="form-field animation a3" name="service[]" size="1" multiple required >
        <?php foreach ($results as $output) {?>
        <option><?php echo $output["service"] ; ?></option>
        <?php } ?>
      </select>

      <b>Montant:</b>
      <select class="form-field animation a3" name="montant[]" size="1" multiple required >
        <?php foreach ($results as $output) {?>
        <option><?php echo $output["service"] ;echo ": "; echo $output["montant"]; ?></option>
        <?php } ?>
      </select>

     <br>
     <b>Username : </b><input type="text" class="form-field animation a3"  name="user" placeholder="username" required>
      <b>Password : </b><input type="password" class="form-field animation a3"  name="pass" placeholder="password" required><br>

      <br>
      <input  type="submit" value="Ajouter" class="form-field animation a4"/>
       
       </form>
     </div>
   </div>
   

  


</body>
</html>





