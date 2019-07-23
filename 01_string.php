<?php

// 获取redis对象
$redis = new Redis();

// 连接redis数据库
$redis->connect('127.0.0.1', 6379);

// set 键 值
$redis->set('myteacher', 'xiaoxin');

// 获取字符串的内容
$res = $redis->get('myteacher');
echo $res;
