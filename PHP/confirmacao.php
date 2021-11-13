<script language='javascript' type='text/javascript'>

	if (window.confirm("Deseja mesmo excluir essa bike?")) {
		var url_atual = window.location.href;
		var index = url_atual.indexOf("?");
		var id = url_atual.substr(index + 1);
		
		window.location.href='deleteBike.php?' + id
	}else{
		window.location.href='ListaBikes.php'
	}
	
</script>
