<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="<?php echo base_url(); ?>" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		
		<title>Back Office</title>
		
		<!-- Bootstrap core CSS -->
		<link href="includes/css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="includes/css/style.css" rel="stylesheet">
		
		<script src="includes/js/jquery.js"></script>
		<script src="includes/js/bootstrap.min.js"></script>
		<!-- Custom Script -->
		<script src="includes/js/script.js"></script>
	</head>
	<body>
		
		<h1>Title</h1>
		
		<?php $this->load->view($template, $data); ?>
		
	</body>
</html>