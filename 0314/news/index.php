<?php
  header('content-type:text/html;charset=utf-8');
  include 'DB.php';
  $data = (new DB())->select();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>新闻展示</title>
</head>
<center>
<body>
	<h2>新闻详情展示</h2>
	<form action="" method="get">
		<input type="text" name="id">
		<input type="submit" value="搜索">
	</form>
	<table border="1">
	<tr>
		<td>ID</td>
		<td>新闻标题</td>
		<td>新闻内容</td>
		<td>作者</td>
		<td>阅读量</td>
		<td>操作</td>
	</tr>
		<?php foreach ($data as $k => $v) { ?>
			<tr>
				<td><?php echo $v['id']?></td>
				<td><?php echo $v['title']?></td>
				<td><?php echo $v['nei']?></td>
				<td><?php echo $v['author']?></td>
				<td><?php echo $v['num']?></td>
				<td>
					<a href="del.php?id=<?php echo $v['id']; ?>">删除</a>
					<a href="">|  修改</a>
				</td>
			</tr>
		<?php } ?>
	</table>
</body>
</center>	
</html>