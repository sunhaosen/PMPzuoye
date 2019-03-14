<?php

  header('content-type:text/html;charset=utf-8');
  include 'DB.php';
  $data = $_POST;
  (new DB())->add($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加新闻</title>
</head>
<body>
	<center>
		<form action="" method="post">
		<table>
			<tr>
				<td>新闻标题:</td>
				<td>
					<input type="text" name="title">
				</td>
			</tr>
			<tr>
				<td>新闻内容:</td>
				<td>
					<textarea name="nei" id="" cols="30" rows="10"></textarea>
				</td>
			</tr>
			<tr>
				<td>新闻作者:</td>
				<td>
					<input type="text" name="author">
				</td>
			</tr>
			<tr>
				<td>浏览量:</td>
				<td>
					<input type="text" name="num">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="添加">
				</td>
				<td>
					<input type="reset" value="重置">
				</td>
			</tr>
		</table>
		</form>
	</center>
	</body>
</html>