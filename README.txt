APP COVID

Es una aplicación de entorno web para poder ayudar en medio de la pandemia producida por la COVID-19 a 
reactivar los sectores económicos de Colombia y para de esta manera poder ayudar a las personas con sus negocios o empresas

•	Requisitos 

	Para la instalación de este software es necesario poder tener descargado un servidor local como WAMPSERVER o XAMPP
	Se requiere crear una base de datos en MySQL con el nombre appcovid y a esta base de datos le agregaremos las sentencias 
	que se encuentran en la carpeta DB_APPCOVID, es necesario manejar el gestor de bases de datos con phpMyAdmin.
	Es necesario poder tener librerías de Bootstrap y usar las hojas de estilo CSS, es muy importante pasar la carpeta APPCOVID a la carpeta www
	de WAMPSERVER

	Este esta soportado por una librería llamada PHPMailer descargada de GitHub https://github.com/PHPMailer/PHPMailer 

	Además de esto cuenta con vistas, la vista usuario o administrador soportada por un rol por ende al momento de instalarlo
	se debe crear desde la propia base de datos un usuario en la tabla persona con el rol de administrador que será el numero 1
	y agregar la contraseña en encriptado MD5 en la casilla pasaadmin ya que es la única que se leerá para el caso del administrador 
	esto porque por defecto todos los usuarios que se registren desde la aplicación solo tendrán permisos de usuario

•	Desarrollado con:

	-	PHP
	-	HTML
	-	CSS
	-	SQL

•	Para la realización de este proyecto se usó:

	-	WAMPSERVER
	-	MySQL
	-	Atom

•	Autores:

	-	Diego Esteban Diaz Vivas (Desarrollador de la app y base de datos) -- ddiazvi29075@universidadean.edu.co


Comenta a otros sobre este proyecto 
