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
					<a class="blog" href="list.php" rel="tooltip" data-placement="bottom" data-original-title="Update contact"></a>
				</div>
			</div>
		</div>
	</div>

	<div class="register-container container">
		<div class="row" >
			<div class="register" style="background-color:white;">	  
			<table class="table table-hover table-responsive" style="border-radius: 8px;">
				<thead style="background-color:#ff4d4d;">
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Address</th>
						<th>City</th>
						<th>State</th>
						<th>Comments</th>
						<th>Edit</th>
						<th>Delete</th>
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
				  <td><a href="edit.php?id={$value[value].id}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
				  <td><a href="delete.php?id={$value[value].id}"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
				</tr>
				{/section} 
			</table>
			</div>
		</div>
	</div>		
	{include file="footer.tpl"}
    </body>
</html>