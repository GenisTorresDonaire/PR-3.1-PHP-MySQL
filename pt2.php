<form action="world2.php" method="post">
	
	Continent
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
	  $query = $pdo->prepare("SELECT distinct Continent from country;");
	  $query->execute();

	  //anem agafant les fileres d'amb una amb una
	  $row = $query->fetch();

	  echo "<select name='continent'>";
	  while ( $row ) {
	    echo "<option>".$row['Continent']."</option>";
	    $row = $query->fetch();
	  }
	  echo "</select>";

	  //eliminem els objectes per alliberar memòria 
	  unset($pdo); 
	  unset($query)

	?>

	
	<br>
	<input type="submit" value="Envia">
</form>