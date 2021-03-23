<!DOCTYPE html>
<html>
<head>
  <title> Login </title>
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

p{
  font-family: 'Crete Round',serif;
  font-size: 25px;
    text-align: center;
  margin-top:7px;
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

.container{
  width: 440px;
  height: 360px;
  text-align: center;
  border-radius: 20px;
  margin: 0 auto;
  background-color: rgba(44, 30, 20,0.5);
  margin-top: 90px;
  margin-bottom: 20px;
}

.container img{
  width: 130px;
  height: 130px;
  margin-top: -60px;
}

input[type="text"],input[type="password"]{
  margin-top: 35px;
  height: 45px;
  width: 300px;
  font-size: 18px;
   border-radius: 20px;
  margin-bottom: 20px;
  background-color: #fff;
  padding-left: 40px;
}
.form-input { 
            position: relative; 
        } 
          
 .form-input i{ 
            position: absolute; 
            width: 60px;
            left: 45px; 
            top: 50px; 
            font-size: 21px;
            padding-right: 20px
            
        } 
/*.form-input::before{
  content: "\f007";
  font-family: "FontAwesome";
  padding-left: 07px;
  padding-top: 40px;
  position: absolute;
  font-size: 35px;
  color: #2980b9; 
}

.form-input:nth-child(2)::before{
  content: "\f023";
}*/

.btn-login{
  font-size: 15px;
  margin-top: 17px;
  border-radius: 7px;
  padding: 15px 25px;
  border: none;
  background-color: #008B8B;
  color: #fff;
}
.btn-login:hover{
  background-color: #1E90FF;
}

</style>
</head>
<body> 

 <header>  </header>

     <section id="head">
      <div class="wrapper">
         <h1>La consultation :</h1>
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
 <p>Entez votre nom d'utilisateur et le mot de passe svp! </p>
<div class="container">
  <img src="css/image/avatar.png"/>

<div class="form-input" >
      <form method="post" action="consult.php">
      
        <input type="hidden" name="id" >
       <input type="text" name="user" placeholder="Nom d'utilisateur du patient" required  /><i class="fas fa-user-circle"></i>
      </div>
      <div class="form-input">
        <input type="password" name="pass" placeholder="Mot de passe du patient" required/><i class="fas fa-lock"></i>
      </div>
      <input type="submit" type="submit" value="LOGIN" class="btn-login"/>
      </form>
</div>

  
</body>
</html>









