<?php
   include('db.php')
   $hostname="localhost";
   $dbname = "tp2";
   $dbuser = "root";
   $dbpassword = "";

  $users = [];

    try {  
	  $connection =   PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpassword);	
	  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $req = $connection->query("select * from $users");
	  //fetchAll: permet de récupérer toutes les lignes retournées par la requete
	  $users = $req->fetchAll(PDO::FETCH_ASSOC);
	  echo "<pre>";
	  var_dump($users);
	  echo "</pre>";
    }catch (PDOException $e) {
		var_dump($e);
		die("Stop");
		//throw $th;
	}	
	//$req = $connection->query("select * from users");
    //die("Stop");
	
	
	/*[
		 "Prénom" => "Mareme",
		 "Nom" => "GAYE",
		 "Email" => "mareme.gaye@edu.ece.fr",
		 "Téléphone" => "07 44 19 24 41"
	],
	[
		"Prénom" => "Mareme",
		 "Nom" => "GAYE",
		 "Email" => "mareme.gaye@edu.ece.fr",
		 "Téléphone" => "07 44 19 24 41"
	],
	[
		"Prénom" => "Mareme",
		 "Nom" => "GAYE",
		 "Email" => "mareme.gaye@edu.ece.fr",
		 "Téléphone" => "07 44 19 24 41"
	],
	*/


	


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="style.css">
	<link href=
</head>
<body>
	
    <h1>MAREME WORKSPACE</h1>
	<table> -->
		<table class=" table table-striped">
		<tr>
			<th>Prénom</th>
			<th>Nom</th>
			<th>Email</th>
			<th>Téléphone</th>
        </tr>
		<?php
		foreach ($users as $value){ 
	        echo "
		    <tr>
			<td>".$value['Prénom']."</td>
			<td>".$value['Nom']."</td>
			<td>".$value['Email']."</td>
			<td>".$value['Téléphone']."</td>
		</tr>
		";	
		}
        ?>
	</table>	
</body>
</html>	