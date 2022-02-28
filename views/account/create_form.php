<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../../js/form_handler.js"></script>
</head>
<body>
	<div class="container">
		
			<h1><?php echo $title; ?></h1>
			<form id="data" method="post" enctype="multipart/form-data">
				<div class="formInput">
					Name: <input class="name" type="text" name="name" /> 
				</div>
				<div class="formInput">
					Image: <input id="image" type="file" name="image" /> 
				</div>
				<div class="formInput">
					<button>Submit</button>
				</div>
			</form>
		
	</div>
</body>
</html>