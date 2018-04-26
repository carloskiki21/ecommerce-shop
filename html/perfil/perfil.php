<?php include(HTML_DIR . 'overall/header.php'); ?>

<div>
	Perfil de <?php echo strtoupper($_user[$id_usuario]['user']) . '</br>'; ?>

	<?php

		if (isset($_SESSION['app_id'])) {
			echo '<a href="?view=logout">Salir</a>';
		}
	?>
</div>

<?php include(HTML_DIR . 'overall/footer.php'); ?>



</html>