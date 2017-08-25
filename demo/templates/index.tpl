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

	<div class="register-container container">
		<div class="row">
			<div class="iphone span5">
				<img src="assets/img/iphone.png" alt="">
			</div>
			<div class="register span6">
				<form action="register.php" method="post">
					<h2>  
						<span class="red"><strong>Contact US</strong></span>
					</h2>
					<label for="name">Name</label>
					<input type="text" id="name" name="name" placeholder="Enter your Name...">
					<label for="email">Email</label>
					<input type="text" id="email" name="email" placeholder="Enter your Email...">
					<label for="add">Address</label>
					<input type="text" id="add" name="add" placeholder="Enter your Address...">
					<label for="city">City</label>
					<input type="text" id="city" name="city" placeholder="Enter your City...">
					<label for="state">State</label>
					<input type="text" id="state" name="state" placeholder="Enter your State...">
					<label for="feedback">Comments</label>
					<input type="text" id="feedback" name="feedback" placeholder="Enter your Comments...">
					<button type="submit" value="submit">Submit</button>
				</form>
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