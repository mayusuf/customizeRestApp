<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../../js/form.js"></script>
</head>
<body>
	<div class="container">
		<h1><?php echo $title; ?></h1>
		<form>
			<div class="formInput">
				Name: <input class="name" type="text" name="name" /> 
			</div>
			<div class="formInput">
				<input id="createForm" type="button" name="save" value="Save" />
			</div>
		</form>
	</div>
</body>
</html>