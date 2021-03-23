<!DOCTYPE html>
<html>
<head>
	<title>page du médecin</title>
	<meta charset="utf-8">
	<link rel="stylesheet" a href="css\all.min.css">
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

.wrapper{
    width: 940px;
    margin: 0 auto;
    padding: 0 10px;
}

.color{
    color: #2D8D89;
}

a{
    text-decoration: none;
    color:#444;
}

h4{
  font-size: 24px;
  color: #444;
}

p{
line-height: 20px;
color: #777;
}

.clear{
    clear: both;
}

small{
    font-size: 13px;
    font-style: italic;

}

h3{
    font-size: 30px;
    color: #444;
}

/* HEADER color */
header{
    height: 35px;
    background-color: #2D8D89;
}

/* HEADER */

#head{
    height: 60px;
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


/*MAIN IMAGE*/
#main-image {
    height: 580px;
    background: url('css/image/medecine.jpg') center no-repeat;
    background-size: 900px 400px;
}

#main-image h4{
    color: #444;
    font-size: 30px;
    font-weight: normal;
    margin-left: 47px;
    padding:140px 0px 40px 0px;
    margin-bottom: 20px;

}

.btn{
    font-size: 20px;
    background-color: #2D8D89;
    color: #444;
    border-radius: 3px;
    display: block;
    width: 120px;
    height: 50px;
    margin: 0 150px;
    line-height: 50px;
    text-align: center;
}

.btn:hover {
    background-color: #2D8D89;
    color: #fff;
}






  </style>

</head>
<body>
     
    
     <header>  </header>

    <section id="head">
     	<div class="wrapper">
     	   <h1>Médecin :</h1>
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

     <section id="main-image">
     		<div class="wrapper">
     			<h4>Le médecin peut consulter <br>les dossiers medicals des patients</h4>
     			<a href="consultation.php" class="btn">Aller</a>
     			
     		</div>
     </section>
</body>
</html>