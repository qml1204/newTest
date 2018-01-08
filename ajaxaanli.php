<?php
    $name = $_GET['name'];
    mysql_connect('localhost', 'root', 'root');
    mysql_query('set names utf8');
    mysql_query('use new');
    $sql = "select * from tb_stu where name='$name'";
    $res = mysql_query($sql);
    $z = mysql_fetch_assoc($res);
    if($z){
        echo 1;
    }else{
        echo 0;
    }
``