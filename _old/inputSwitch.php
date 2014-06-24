<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Title of the document</title>
<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
<script src="assets/js/jquery-1.8.2.min.js"></script>

<style type="text/css">
  .creativeLabel[readonly]{
	  border:none;
  }
</style>

</head>
<body>

<input ID="creativeLabel1" class="creativeLabel" type="text" value="Facebook Publishing" readonly>

<script>
	$(".creativeLabel").dblclick(function(){
		//alert('yep');
		$(this).removeAttr('readonly');
	});
</script>
</body>
</html>