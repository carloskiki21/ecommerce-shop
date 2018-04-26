function goAdd(){
	var connect, form, response, result, product_name, product_desc;
	productname = __('product_name').value;
	productdesc = __('product_desc').value;

	form = 'productname=' + productname + '&productdesc=' + productdesc;

	connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');

	connect.onreadystatechange = function(){
		if(connect.readyState == 4 && connect.status == 200){
			if(connect.responseText == 1){
				result = '<h4>Conectado</h4>';
				__('_AJAX_LOGIN_').innerHTML = result;
				location.reload();
			}else{
				__('_AJAX_LOGIN_').innerHTML = connect.responseText;
			}			
		}else if(connect.readyState != 4){
			result = '<h4>Conectado</h4>';
			__('_AJAX_LOGIN_').innerHTML = result;
		}
	}
	connect.open('POST','ajax.php?mode=add',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
}

function runScriptAdd(e){
	if(e.keyCode == 13){
		goAdd();
	}
}