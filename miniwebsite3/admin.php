<?php
session_start();

if(!isset($_SESSION['admin'])){
    $_SESSION['admin']['a']['username'] = "Ayah";
	$_SESSION['admin']['a']['password'] = "123";
	$_SESSION['admin']['a']['role']     = "admin";
	$_SESSION['admin']['m']['username'] = "maya";
	$_SESSION['admin']['m']['password'] = "123";
	$_SESSION['admin']['m']['role']     = "admin";
	$_SESSION['admin']['b']['username'] = "bayan";
	$_SESSION['admin']['b']['password'] = "123";
	$_SESSION['admin']['b']['role']     = "user";
	$_SESSION['admin']['r']['username'] = "rama";
	$_SESSION['admin']['r']['password'] = "123";
	$_SESSION['admin']['r']['role']     = "user";
	$_SESSION['admin']['h']['username'] = "hala";
	$_SESSION['admin']['h']['password'] = "123";
	$_SESSION['admin']['h']['role']     = "user";
}
if(isset($_POST['delete'])){
	$key = $_POST['key'];
	unset($_SESSION['admin']["$key"]);
}

 ?>

<h1>Welcome To Admin</h1>

<table border="3">
	<tr>
		<th>Key</th>
		<th>Username</th>
		<th>Password</th>
		<th>Role</th>
		<th>Delete</th>
		
	</tr>
	<?php
	foreach ($_SESSION['admin'] as $key => $value) {		
		echo "<tr>";
		echo "<td>{$key}</td>";
		echo "<td>{$value['username']}</td>";
		echo "<td>{$value['password']}</td>";
		echo "<td>{$value['role']}</td>";
		echo "<td><a href='delete.php?key=$key'>Delete</a></td>";		
		// echo "<tr>
		// 		<form method='post'>
		// 		<input type='text' name='key'>
		// 		<input type='submit' name='delete2' value='delete'></form>
		// 		</td>";
		// 		echo "<td>
		// 		<form method='post'>
		// 		<input type='hidden' name='key' value='$key'>
		// 		<input type='submit' name='delete3' value='delete'></form>
		// 		</td>";		
		echo "</tr>";
	}


	 ?>
</table>