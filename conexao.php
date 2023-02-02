<?php
error_reporting(E_STRICT);
HOSTNAME = "aws-sa-east-1.connect.psdb.cloud"
USERNAME = "ioudoj7c787zzow91xbp"
PASSWORD = "pscale_pw_b9NXLvxy1gtj3EJA7JrPitgv48QPwqeXjm03FzDKjH8"
DATABASE = "formulario"
  
$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
$mysqli->real_connect('[HOSTNAME]', '[USERNAME]', '[PASSWORD]', '[DATABASE]');
$mysqli->close();
?>
Successfully connected to PlanetScale!
