<?php include('html/overall/header.php'); ?>

<body>

	<div class="container-index">
		<div class="log">
			<?php
				if(isset($_SESSION['app_id'])){

					echo '<a href="?view=logout">'.strtoupper($_user[$_SESSION['app_id']]['user']).'</a>';

				}else{
					echo '<a href="?view=login">login</a>';
				}	
			?>
		</div>
	</div>

<?php include('html/overall/footer.php'); ?>
</body>
</html>