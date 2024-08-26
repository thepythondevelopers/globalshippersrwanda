<!DOCTYPE html>
<html>
<head>
	<title>Testing Editor</title>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.slim.min.js"></script>
<script type="text/javascript" src="/extra-assets/ckeditor/ckeditor.js"></script>
</head>
<body>
	<form>
		<textarea id='content'></textarea>
	</form>
</body>
<script type="text/javascript">
		$(function(){
			CKEDITOR.replace('content');
		});

</script>
	
	
</html>
