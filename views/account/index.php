<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
	<script type="text/javascript" src="../../js/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../../js/load_data.js"></script>
</head>
<body>
	<div class="container">
		
			<h1><?php echo $title; ?></h1>
			<div class="accounts">
				<table>
					<tr><th>Name</th><th>Image</th></tr>
				</table>
				<table id="tableContent">
									
					<tr><td>Yusuf</td><td><img src="../../uploads/images/cv_pic.jpg" width="75px" height="75px" /></td></tr>						
				
				</table>
				<div >
					<button class="loadData">Load Data</button>
				</div>
			</div>
		
	</div>
</body>
</html>