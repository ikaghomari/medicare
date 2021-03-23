
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<html>
<head>
    <meta charset="utf-8">
    <title>Supprimer</title>
      <link rel="stylesheet" href="css/all.min.css">
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

fieldset{
     text-align:left;
     margin-left:300px;
     margin-right: 300px
}

.btn {
  padding: 15px 25px;
  border: none;
  background-color:#CD5C5C ;
  color: #000;
  font-size:15px;
}
.btn:hover {
  color:#FFF;
  background-color: #555;
  transition: 0.3s;

}

</style>
</head>
<?php
$bdd=new PDO('mysql:host=localhost;dbname=medical', 'root', '');
?>

<body>
     <div class="icon-bar">
          <a class="active" href="page admin.html"><i class="fas fa-sign-out-alt"></i></a> 
          <a href="afficher.php"><i class="fas fa-tv"></i></a> 
          <a href="ajouter.html"><i class="fas fa-plus-circle"></i></a> 
          <a href="modifier1.php"><i class="fas fa-edit"></i></a>
          <a href="supprimer.php"><i class="fas fa-trash-alt"></i></a> 
       </div>
       <br>

<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=medical','root','');
$pdoStat=$objetPdo->prepare('DELETE FROM service WHERE id=:num LIMIT 1');
$pdoStat->bindValue(':num', $_GET['id'], PDO::PARAM_INT);
$executeIsOk = $pdoStat->execute();
if ($executeIsOk) {
	echo '<br><br><center><fieldset><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;le donneur a été supprimé</h2></fieldset></center>';
}else{
	echo '<br><br><center><fieldset><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Echec de la suppression du donneur</h2></fieldset></center>';
}
  ?>
  