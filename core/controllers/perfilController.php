<?php

if(isset($_GET['id']) and array_key_exists($_GET['id'],$_user)) {
  $id_usuario = intval($_GET['id']);
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM users WHERE id='$id_usuario';");
  include('html/perfil/perfil.php');
  $db->liberar($sql);
  $db->close();
} else {
  header('location: ?view=index');
}

?>