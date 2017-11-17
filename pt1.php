<form action="world.php" method="post">
	
	Country
	<?php
		# (1.1) Connectem a MySQL (host,usuari,contrassenya)
 		$conn = mysqli_connect('localhost','root','Genis@1274089');
 
 		# (1.2) Triem la base de dades amb la que treballarem
 		mysqli_select_db($conn, 'world');
 
 		# (2.1) creem el string de la consulta (query)
 		$consulta = "SELECT Name,Code FROM country;";
 
 		# (2.2) enviem la query al SGBD per obtenir el resultat
 		$resultat = mysqli_query($conn, $consulta);

 		echo "<select name='country'>";
 		while( $registre = mysqli_fetch_assoc($resultat) ){
 			echo "<option value='".$registre["Code"]."'>".$registre["Name"]."</option>";
 		}
 		echo "</select>";
	?>
	
	<br>
	<input type="submit" value="Envia">
</form>