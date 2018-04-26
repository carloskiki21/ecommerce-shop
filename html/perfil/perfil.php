<?php include(HTML_DIR . 'overall/header.php'); ?>

<div>
	Perfil de <?php echo strtoupper($_user[$id_usuario]['user']) . '</br>'; ?>
	<a href="?view=logout">Salir</a>

	<?php echo $user_link; ?>
</div>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</html>