<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Жопа</title>
		<script>
			var lgn, pss;
		</script>
		<style type="text/css">
			TD, TH {
			border: 2px transparent;
			}
			TABLE{
			border-radius: 15px;
			}
		</style>
	</head>
	
	<body>
		<form method='post'>
			<h1><p style="text-align: center">Сайтик</p></h1>
			<table border="1" align="center" height="80">
				<tr>
					<th width="100">Логин</th>
					<td align="center">
						<input type="text" name="Login" width="150">
					</td>
					<td width="20"></td>
					<td rowspan="2">
						<button type="submit">Вход</button>
					</td>
				</tr>
				<tr>
					<th>Пароль</th>
					<td align="center">
						<input type="text" name="Password" width="150">
					</td>
					<td width="50"></td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php
include_once "db.php";

$db = new DB();

$a = $_POST['Login'];
$b = $_POST['Password'];

?>