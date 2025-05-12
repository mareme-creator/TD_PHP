<?php
session_start ( );
if (isset($_POST["login"])){
    if(isset($_SESSION['user']))
   header("Location: index.php");
}

$username="mareme";
$password="1234";
$error = "";
if (isset($_POST["login"])){
      if(isset($_POST["username"]) && isset($_POST['password'])){
          $input_username=$_POST["username"];
          $input_password=$_POST["password"];
          if($username == $input_username && $password==$input_password){
            $_SESSION ["user"] = $username;
            header("Location: index.php");
            var_dump($_SESSION);
          }else{
             $error = "Informations de connexion incorrectes";
        } 
}else{
    $error = "Identifiants incorrects";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.PHP" method="post" >
    <input name="username" type="texte"placeholder="username">
    <br></br>
    <input name="password"type="password"placeholder="password">
    <br></br>
    <input name="login"type="submit"value="login">  
</form>

<p><?php echo $error ;?></p>

</body>
</html>	