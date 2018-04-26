<?php include(HTML_DIR.'overall/header.php'); ?>
<div id="_AJAX_LOGIN_"></div>
<div class="add">
	<div role="form" onkeypress="return runScriptAdd(event)">
	  <div class="form-group">
	    <label for="usrname_or_email"><span class="glyphicon glyphicon-user">
	      </span> Product name:
	    </label>
	    <input type="text" class="form-control" id="product_name" placeholder="product_name">
	  </div>

	  <div class="form-group">
	    <label for="desc">
	      <span class="glyphicon glyphicon-eye-open"></span>Product desc
	    </label>
	    <input type="text" class="form-control" id="product_desc" placeholder="Product description">
	  </div>

	  <button type="button" class="btn btn-default btn-success btn-block" onclick="goAdd()"><span class="glyphicon glyphicon-off"></span>Add</button>
	</div>
</div>

<script src="views/app/js/add.js"></script>

<?php include(HTML_DIR.'overall/footer.php'); ?>
</body>
</html>