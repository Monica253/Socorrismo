# Gestión Socorrismo

Este proyecto se basa en la creación de un software para gestionar empresas de socorrismo, u otras que realicen una funcionalidad parecida.

Esta aplicación permitirá a los encargados y/o jefes gestionar los cuadrantes de los trabajadores, también podrán gestionar los hoteles con los que trabaja la empresa y las diversas piscinas que posean, que serán los lugares de trabajo de dichos empleados.

Por otra parte, permitirá a los usuarios (trabajadores) consultar información relacionada con los hoteles y piscinas mencionados anteriormente, como su localización, horario, etc., y consultar sus horarios de trabajo de forma más cómoda, a través de la aplicación en un calendario en el que podrán elegir si verlo por día, mes, año, o si prefieren en un listado.
Además, también dispondrán de la información de contacto de los encargados por si la necesitaran en algún momento en caso de duda respecto a la aplicación u otro tema.

La aplicación, una vez instalada, será accesible tanto desde un pc, como desde un móvil, facilitando la consulta a través de estos dispositivos. Se adapta a todo tipo de pantallas, pero por comodidad, para los encargados, que serán los que usen el panel de administrador para registrar hoteles, crear días laborales, etc., se les recomienda que la usen desde un pc, ya que así tendrían una visión más amplia a la hora de rellenar los formularios de registro.


## Pre-requisitos

Tener instalado:

- Xampp u otro sistema de gestión de bases de datos [Instalar](https://www.apachefriends.org/es/index.html)
- Visual Studio Code u otro editor de código [Instalar](https://code.visualstudio.com/)
- php7.3
- composer v2 [Instalar](https://getcomposer.org/download/)
- mysql
- npm

## Guía si se va a descargar en local 

Si estamos trabajando en windows debemos tener instalado un entorno web.
En este caso [Xampp](https://www.apachefriends.org/es/index.html).

En este paquete se incluye el lenguaje php y la base de datos mysql.

Clonar el proyecto en la carpeta C:\xampp\htdocs
```
git clone https://github.com/Monica253/Socorrismo.git
```

Instalar npm (versión 14)
```
node -v
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.3/install.sh (instalar nvm)
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.35.3/install.sh | bash (instalar nvm)
source ~/.bashrc
nvm list-remote (listar versiones de node)
nvm install v14.15.4 (instalar una versión concreta)
npm install (instalar dependencias de jetstream y lo que haya instalado)
npm run production / npm run dev
```

Una vez clonado, el directorio del proyecto se encontrará en: C:\xampp\htdocs\Socorrismo

Configurar fichero para visualizar proyecto en navegador a través de una ruta: C:\xampp\apache\conf\extra\httpd-vhosts.conf
```
<VirtualHost socorrismo.test:80>
	DocumentRoot "C:\xampp\htdocs\socorrismo\public"
	ServerName localhost
</VirtualHost>
<VirtualHost socorrismo.test:80>
	DocumentRoot "C:\xampp\htdocs\socorrismo\public"
	ServerName socorrismo.test
	<Directory "C:\xampp\htdocs\socorrismo\public">
		Options All
		AllowOverride All
		Require all granted
	</Directory>
</VirtualHost>
```

Configurar fichero hosts para poder acceder a ese dominio: C:\Windows\System32\drivers\etc\hosts
```
127.0.0.1	Socorrismo.test
```

Con el servidor preparado, iniciamos el servidor Apache y el MySQL, y ponemos la ruta (del vhosts) en el navegador.

Si todo se ha realizado según lo descrito, debería ser esta -> http://socorrismo.test/

**Nota** La base de datos la tendremos que crear, se puede crear fácilmente a través del phpMyAdmin, para acceder es esta url http://localhost/phpmyadmin.

Habría que crear la base de datos "socorrismo".

También hay que crear un archivo .env, y copiar y pegar directamente todo el contenido del fichero .env.example.

Ejecutamos el comando
```
php artisan key:generate
```

Instalamos las dependecias.
**Importante:** Para que funcione tenemos que estar situados en la carpeta del proyecto.
```
composer update
npm install
```

Antes de ejecutar las migraciones comprobamos 
Ejecutamos las migraciones
```
php artisan migrate
```

Ejecutamos los seeders
```
php artisan db:seed
```


## Guía si se va a descargar en Goormide 

### Preparación del contenedor

* Elegir un nombre
* Stack en php y activar los modulos adicionales 
· Install MySQL
· Enable mysql-ctl command

#### Preparación del entorno

Es recomendable ejecutar 
```
sudo apt-get update
```
y 
```
sudo apt-get upgrade
```
antes de comenzar con las instalaciones.

Descargamos la version 2 de composer
```
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
```

Ahora procedemos a descargar las extensiones necesarias

##### Extensiones de php necesarias

· php-xml
```
sudo apt install php7.3-xml
```

· php-mbstring
```
sudo apt-get install php7.3-mbstring
```

· php-mysql
```
sudo apt-get install php7.3-mysql
```

#### Preparación de la bbdd
	
* Instalar y activar mysql 
```
sudo apt install mysql
sudo service mysql start
```

* Entrar a la bbdd como usuario root
```
sudo mysql --user=root mysql
```
* Eliminar el usuario root
```
drop user root@localhost;
```
* Crear un nuevo usuario con una contraseña
```
CREATE USER 'root'@'localhost' IDENTIFIED BY '';
```
* Crear base de datos
```
CREATE DATABASE socorrismo;
```
* Otogar todos los privilegios al usuario
```
GRANT ALL PRIVILEGES ON *.* TO 'root'@'localhost' WITH GRANT OPTION;
```
* Limpiar cache
```
FLUSH PRIVILEGES;
```

Clonamos y actualizamos
```
git clone https://github.com/Monica253/Socorrismo.git
```
Creamos el fichero .env como en el caso anterior
```
composer update
npm install
```

#### Activar el servidor en goormide

Tener en cuenta que el servcio mysql debe estar activo.
```
sudo service mysql start
```
Con mysql iniciado, podemos ejecutar las migraciones
```
php artisan migrate
```
Y ejecutar los seeders
```
php artisan db:seed
```

En Goormide tenemos la opción run. El script que viene por defecto es 
```
php -S 0.0.0.0:${current.using.port} -t ${current.project.path}
```
Debemos modificarlo y poner para que nos coja la carpeta del proyecto
```
php -S 0.0.0.0:${current.using.port} -t ${current.project.path}/Socorrismo/public
```
**Nota:** Ten en cuenta que si necesitas acceder de nuevo a la consola mysql tendrás que acceder con el siguiente comando
```
sudo mysql --user=root -p
```
y a continuación poner la contraseña que establecimos anteriormente (ninguna en este caso).

## Construido con 

* [Laravel](https://laravel.com/docs/8.x/readme) - El framework web usado

## Autora

**Mónica Betancort** - *Trabajo Inicial* - [Mónica Betancort](https://github.com/Monica253/Socorrismo)
