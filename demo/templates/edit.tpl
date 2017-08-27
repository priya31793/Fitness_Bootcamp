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
				<table border="0">
					<tr> 
						<td>Name</td>
						<td><input type="text" name="name" value="{$value[value].name}"></td>
					</tr>
					<tr> 
						<td>Email</td>
						<td><input type="email" name="email" value="{$value[value].email}"></td>
					</tr>
					<tr> 
						<td>Address</td>
						<td><input type="text" name="address" value="{$value[value].address}"></td>
					</tr>
					<tr> 
						<td>City</td>
						<td><input type="text" name="city" value="{$value[value].city}"></td>
					</tr>
					<tr> 
						<td>State</td>
						<td><input type="text" name="state" value="{$value[value].state}"></td>
					</tr>
					<tr>
						<td><input type="hidden" name="id" value="{$value[value].id}"></td>
						<td><button type="submit" name="update" value="update">Update</button></td>
					</tr>
				</table>
				{/section}
			</form>
		</div>
		</div>
    </div>
	{include file="footer.tpl"}
    </body>
</html>