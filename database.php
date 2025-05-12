<?php
   $hostname="localhost";
   $dbname = "tp2";
   $dbuser = "root";
   $dbpassword = "";

  $users = [];

    try {  
	  $connection = new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser, $dbpassword);	
	  $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }  catch(\Throwable $th) {
        die("Base de donnée indisponible");
    }
    ?>  
          
	 
	  