<html>
 <head>
 	<title>Exemple de lectura de dades a MySQL</title>
 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 	<style>
 		body{
 		}
 		table,td {
 			border: 1px solid black;
 			border-spacing: 0px;
 		}
 	</style>
 </head>
 
 <body>
 	<h1>Exemple de lectura de dades a MySQL</h1>
 
 	<?php
	  //connexió dins block try-catch:
	  //  prova d'executar el contingut del try
	  //  si falla executa el catch
	  try {
	    $hostname = "localhost";
	    $dbname = "world";
	    $username = "root";
	    $pw = "Genis@1274089";
	    $pdo = new PDO ("mysql:host=$hostname;dbname=$dbname","$username","$pw");
	  } catch (PDOException $e) {
	    echo "Failed to get DB handle: " . $e->getMessage() . "\n";
	    exit;
	  }

	  //preparem i executem la consulta
	  $country = $_POST['continent'];
	  $query = $pdo->prepare("select name,population from country where Continent='".$country."';");
	  $query->execute();

	  //anem agafant les fileres d'amb una amb una
	  $row = $query->fetch();
	  
	  
	  
	?>
 
 	<!-- (3.1) aquí va la taula HTML que omplirem amb dades de la BBDD -->
 	<table>
 	<!-- la capçalera de la taula l'hem de fer nosaltres -->
 	<thead><td colspan="4" align="center" bgcolor="cyan">Llistat de ciutats</td></thead>
 	<?php
 		# (3.2) Bucle while
 		
 		while ( $row ) {
	    	echo "<tr>";
	    		echo "<td>".$row['name']."</td>";
	    		echo "<td>".$row['population']."</td>";
	    	echo "</tr>";
	    	$row = $query->fetch();
	  	}

	  	$query = $pdo->prepare("select sum(population) as total from country where Continent='".$country."';");
	  	$query->execute();

	  	//anem agafant les fileres d'amb una amb una
	  	$row = $query->fetch();
	  	
	  	while ( $row ) {
	    	echo "<tr>";
	    		echo "<td> Total: </td>";
	    		echo "<td>".$row['total']."</td>";
	    	echo "</tr>";
	    	$row = $query->fetch();
	  	}

	  	//eliminem els objectes per alliberar memòria 
	  	unset($pdo); 
	  	unset($query);
 	?>
  	<!-- (3.6) tanquem la taula -->
 	</table>	
 </body>
</html>
