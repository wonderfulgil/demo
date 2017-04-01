<?php
//设置页面内容是html编码格式是utf-8
//header("Content-Type: text/plain;charset=utf-8"); 
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Methods:POST,GET');
header('Access-Control-Allow-Credentials:true'); 
header("Content-Type: application/json;charset=utf-8"); 
//header("Content-Type: text/xml;charset=utf-8"); 
//header("Content-Type: text/html;charset=utf-8"); 
//header("Content-Type: application/javascript;charset=utf-8"); 

//定义多维数组，包含产品信息
$staff = array
	(
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 御诚 ROYAL花萃净白平衡柔肤水（120ml）",
			"img"=>"img/91.jpg",
			"price"=>"¥ 44.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 御诚 ROYAL花萃净白平衡柔肤水（120ml）",
			"img"=>"img/91.jpg",
			"price"=>"¥ 44.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 御诚 ROYAL花萃净白平衡柔肤水（120ml）",
			"img"=>"img/91.jpg",
			"price"=>"¥ 44.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 御诚 ROYAL花萃净白平衡柔肤水（120ml）",
			"img"=>"img/91.jpg",
			"price"=>"¥ 44.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 御诚 ROYAL花萃净白平衡柔肤水（120ml）",
			"img"=>"img/91.jpg",
			"price"=>"¥ 44.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 御诚 ROYAL花萃净白平衡柔肤水（120ml）",
			"img"=>"img/91.jpg",
			"price"=>"¥ 44.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 御诚 ROYAL花萃净白平衡柔肤水（120ml）",
			"img"=>"img/91.jpg",
			"price"=>"¥ 44.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 御诚 ROYAL花萃净白平衡柔肤水（120ml）",
			"img"=>"img/91.jpg",
			"price"=>"¥ 44.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 御诚 ROYAL花萃净白平衡柔肤水（120ml）",
			"img"=>"img/91.jpg",
			"price"=>"¥ 44.00")
	);
	$produce = array
	(
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 999感冒冲剂",
			"img"=>"img/bg.png",
			"price"=>"¥ 22.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 999感冒冲剂",
			"img"=>"img/bg.png",
			"price"=>"¥ 22.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 999感冒冲剂",
			"img"=>"img/bg.png",
			"price"=>"¥ 22.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 999感冒冲剂",
			"img"=>"img/bg.png",
			"price"=>"¥ 22.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 999感冒冲剂",
			"img"=>"img/bg.png",
			"price"=>"¥ 22.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 999感冒冲剂",
			"img"=>"img/bg.png",
			"price"=>"¥ 22.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 999感冒冲剂",
			"img"=>"img/bg.png",
			"price"=>"¥ 22.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 999感冒冲剂",
			"img"=>"img/bg.png",
			"price"=>"¥ 22.00"),
		array("url"=>"http://www.baidu.com",
			"title"=>"买一送一 999感冒冲剂",
			"img"=>"img/bg.png",
			"price"=>"¥ 22.00")
	);
	
	$arrs=array(
		'rows'=>$staff,
		'row2'=>$produce
	);
	echo json_encode($arrs);

	    
?>