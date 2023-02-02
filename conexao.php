<?php
error_reporting(E_STRICT);

$mysqli = mysqli_init();
$mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
$mysqli->real_connect('[aws-sa-east-1.connect.psdb.cloud]', '[ioudoj7c787zzow91xbp]', '[pscale_pw_b9NXLvxy1gtj3EJA7JrPitgv48QPwqeXjm03FzDKjH8]', '[formulario]');
$mysqli->close();
?>
Successfully connected to PlanetScale!
