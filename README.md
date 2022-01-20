# MVC con PHP

- MVC
- Motor de plantillas Blade.
- Controlador frontal.
- Active Record.


##  Instalación:

- Crear el fichero /etc/apache2/sites-available/mvc18.conf

- En xampp está en el fichero:
  \xampp\apache\conf\extra

```
<VirtualHost *:80>
    ServerName mvc18.local

    ServerAdmin webmaster@localhost
    DocumentRoot /home/alumno/mvc18/public

    <Directory /home/alumno/mvc18/public>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride All
        Require all granted
    </Directory>

</VirtualHost>

```

- Activar el servicio y reiniciar apache:

```
$ sudo a2ensite mvc18
$ sudo service apache2 restart
```

- Editar el fichero /etc/hosts. Añade la línea:

```
127.0.0.1   mvc18.local
```