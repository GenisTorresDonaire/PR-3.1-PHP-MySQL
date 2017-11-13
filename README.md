# PR-3.1-PHP-MySQL

Enlace de descarga de la base de datos World:
	https://dev.mysql.com/doc/index-other.html

1)	Lo primero es descargar la base de datos para ello hay que ir a la ruta 	anterior -> Example Databases -> "world databases".

2)	Hay que instalar el MySQL:
		http://www.ite.educacion.es/formacion/materiales/85/cd/linux/m5/instalacin_y_configuracin_de_mysql.html

3)	Una vez conectado, hay que importar la base de datos
		mysql -u "username" -p < world.sql

4)	Lo segundo es abrir el terminal y conectarse con el siguiente comando:
		mysql -u "username" -p "database"


NOTA:
	En las connexiones de los ficheros (index.php, world.php) hay que editar las lineas datos de usuario y contraseña con los datos de tu MySQL ("localhost","root","1234") para poder acceder a los datos de tu tabla que tienes que tener ya instalada en los pasos anteriores.

	Una vez en el from, seleccionas el Country del desplegable podras ver todos los campos de ese Country. Tambien hay un fichero llamado paises.php donde se pueden ver todos los nombres de los paises.

	IMPORTANTE:
		Toda la carpeta tiene que estar situada en localhost, y debes de tener php instalado sino no podras ver nada, ya que trabaja con php y no podria leerlo.