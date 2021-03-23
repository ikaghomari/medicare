
<!DOCTYPE html>
<html>
<head>
	<title> imprimer les infos</title>

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

.icon-bar .print{
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
          <a href="index.html"><i class="fas fa-home"></i> sortir</a> 
          <a href="ajouterS.php"><i class="fas fa-user-plus"></i> ajouter patient</a> 
          <a class="print" href="imprimer.php"><i class="fas fa-print"></i> imprimer</a>
          <a href="afficherS.php"><i class="fas fa-table"></i> afficher table patient</a>
          <a href="rapport.php"><i class="fas fa-edit"></i> ecrire rapport</a> 
       </div>
      
      <div class="form">
      <form method="POST" action="print.php">
      <input type="text" class="form-field animation a3" id="id" name="id" placeholder="Entrer le 'ID' du patient"><br>
      <center><input  type="submit" value="submit" class="form-field animation a4"/></center>
      
      </form>
      </div>
   </div>
   

  


</body>
</html>





