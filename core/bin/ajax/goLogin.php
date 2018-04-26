<?php

if (!empty($_POST['user']) and !empty($_POST['pass'])) {
	$db = new Conexion();

	$user = $_POST['user'];
	$email = $_POST['email'];
	$pass = Encrypt($_POST['pass']);

	$query = $db->query("SELECT id FROM users WHERE user='$user' AND pass='$pass' LIMIT 1;");
	if ($db->rows($query) > 0) {
		$_SESSION['app_id'] = $db->recorrer($query)[0];
		echo 1;
	} else {
		echo '<div class="alert alert-dismissible alert-danger">
			    <button type="button" class="close" data-dismiss="alert">x</button>
			    <strong>ERROR:</strong> Las credenciales son incorrectas.
			  </div>';
	}
	$db->liberar($sql);
  	$db->close();
}

?>
