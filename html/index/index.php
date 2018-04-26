<?php include('html/overall/header.php'); ?>

<body>

	<div class="container-index">
		<div class="log">
			<?php
				if(isset($_SESSION['app_id'])){

					echo '<a href="?view=perfil&id=' . $_SESSION['app_id'] . '">' . strtoupper($_user[$_SESSION['app_id']]['user']) . '</a></br>';

					#echo '<a href="?view=logout">'.strtoupper($_user[$_SESSION['app_id']]['user']).'</a>';

					echo '<a href="?view=logout">Salir</a>';


				}else{
					echo '<a href="?view=login">login</a>';
				}	
				//'.$_SESSION['app_id'].'
			?>
		</div>
	</div>

<?php include('html/overall/footer.php'); ?>
</body>
</html>