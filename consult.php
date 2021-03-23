<?php 

$host="localhost";
$user="root";
$password="";
$db="medicare";

mysql_connect($host,$user,$password);
mysql_select_db($db);
$id=$_POST['id'];
if(isset($_POST['id'])){
    
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    
    $sql="select * from patient where user='".$user."'AND pass='".$pass."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
         header('location:acces.php');
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>

