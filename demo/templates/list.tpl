<!DOCTYPE html>
<html lang="en">
<head>
		<title>{$page_title}</title>
        <meta charset="utf-8">
        <title>Parents Queries</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Oleo+Script:400,700'>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
{include file="header.tpl"}
<div class="header">
		<div class="container">
			<div class="row">
				<div class="logo span4">
					<h1>
						<a href="">Parents Enquiry Form <span class="red">.</span></a>
					</h1>
				</div>
				<div class="links span8">
					<a class="home" href="index.php" rel="tooltip" data-placement="bottom" data-original-title="Home"></a>
					<a class="blog" href="update.php" rel="tooltip" data-placement="bottom" data-original-title="Update Feedback"></a>
				</div>
			</div>
		</div>
	</div>

	
	<div class="register-container container" style="" >
		<div class="row" >
			<div class="register" style="background-color:white;" >	  
			<table class="table table-hover table-responsive" style="border-radius: 8px;">
				<thead style="background-color:#ff4d4d; ">
					<tr>
						<th >Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>City</th>
						<th>State</th>
						<th>Comments</th>
						<th>Edit</th>
					</tr>
				</thead>
				{section name=value loop=$value}
				<tr>
				  <td>{$value[value].name}</td>
				  <td>{$value[value].email}</td>
				  <td>{$value[value].address}</td>
				  <td>{$value[value].city}</td>
				  <td>{$value[value].state}</td>
				  <td>{$value[value].feedback}</td>
				  <td><a href="edit.php?id={$value[value].id}">Edit</a></td>
				</tr>
				{/section} 
			</table>
		</div>
	</div>
</div>		
{include file="footer.tpl"}

	<!-- Javascript -->
	<script src="assets/js/jquery-1.8.2.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.backstretch.min.js"></script>
	<script src="assets/js/scripts.js"></script>
	
    </body>
</html>