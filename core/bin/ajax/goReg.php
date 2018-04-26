<?php 

$db = new Conexion();

$user = $db->real_escape_string($_POST['user']);
$email = $db->real_escape_string($_POST['email']);
$pass = Encrypt($_POST['pass']);

$sql = $db->query("SELECT user FROM users WHERE user='$user' OR email='$email' LIMIT 1;");

if ($db->rows($sql) == 0) {
	$db->query("INSERT INTO users (user,email,pass) VALUES ('$user','$email','$pass');");
	$sql_2 = $db->query("SELECT MAX(id) AS id FROM users;");

	$_SESSION['app_id'] = $db->recorrer($sql_2)[0];

	$db->liberar($sql_2);

	$LOG = 1;
} else {
	$usuario = $db->recorrer($sql)[0];
	
	if (strtolower($user) == strtolower($usuario)){
		$LOG = 'El user ya existe';
	} else {
		$LOG = 'El email ya existe';
	}
}

$db->liberar($sql_2);
$db->close();

echo $LOG;

?>