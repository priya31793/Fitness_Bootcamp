<!DOCTYPE html>
<html lang="en">
	{include file="header.tpl"}
<body>
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
					<a class="blog" href="list.php" rel="tooltip" data-placement="bottom" data-original-title="Update Contact"></a>
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
			<form name="form1" method="post" action="update.php">
				<h2>  
					<span class="red"><strong>Update Your Info</strong></span>
				</h2>
				{section name=value loop=$value}
					<label for="Name">Name</label>
					<input type="text" id="name" name="name" placeholder="Enter your Name..." value="{$value[value].name}">
					<label for="Email">Email</label>
					<input type="email" id="email" name="email" placeholder="Enter your Email..." value="{$value[value].email}">
					<label for="Address">Address</label>
					<input type="text" id="address" name="address" placeholder="Enter your Address..." value="{$value[value].address}">
					<label for="City">City</label>
					<input type="text" id="city" name="city" placeholder="Enter your City..." value="{$value[value].city}">
					<label for="State">State</label>
					<input type="text" id="state" name="state" placeholder="Enter your State..." value="{$value[value].state}">
					<input type="hidden" name="id" value="{$value[value].id}">
					<button type="submit" name="update" value="update">Update</button>				
				{/section}
			</form>
		</div>
		</div>
    </div>
	{include file="footer.tpl"}
    </body>
</html>