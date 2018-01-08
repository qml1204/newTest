<?php
	mysql_connect('localhost', 'root', 'root');
	mysql_query('set names utf8');
	mysql_query('use new');
	$sql = "select count(id) as num from tb_stu";
	$res = mysql_query($sql);
	$row = mysql_fetch_assoc($res);
	$count = $row['num'];
	$psize = 10;
	$pcount = ceil($count/$psize);
	$page = $_GET['p'];
	$start = ($page - 1)*$psize;
	$sql = "select * from tb_stu limit $start, $psize";
	$res = mysql_query($sql);
	$data = array();
	while($row = mysql_fetch_assoc($res)){
		$data[] = $row;
	}
	$data[] = $pcount;
	echo json_encode($data);
	