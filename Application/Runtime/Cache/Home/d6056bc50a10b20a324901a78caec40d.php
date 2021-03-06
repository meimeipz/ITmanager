<?php if (!defined('THINK_PATH')) exit();?><!-- 由于bootstrap引用了HTML5特定的HTML 元素和 CSS属性，所以使用Bootstrap的时候，所有的html文件都要在顶部引用HTML5的DOCTYPE属性--> 

<!DOCTYPE html> 

<html lang="zh-CN">

<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>Xenon - Dashboard</title>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="public/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="public/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link rel="stylesheet" href="public/css/xenon-core.css">
	<link rel="stylesheet" href="public/css/xenon-forms.css">
	<link rel="stylesheet" href="public/css/xenon-components.css">
	<link rel="stylesheet" href="public/css/xenon-skins.css">
	<link rel="stylesheet" href="public/css/custom.css">

	<script src="public/js/jquery-1.11.1.min.js"></script>
	
</head>

<body>



<div>

<form class="form-signin"  method="post" action="index.php?p=home&c=user&a=login">

	<h2 class="form-signin-heading">欢迎登录</h2>

	<input name="userName" id="userName" type="text" class="form-control" placeholder="用户名" required autofocus>

	<br>

	<input name="passWord" id="passWord" type="password" class="form-control" placeholder="密码" required>

	<br>

	

	<input type="submit" class="btn btn-lg btn-primary btn-block"  value="登录"> 
	<a href="index.php?p=home&c=index&a=register"">用户注册</a>   



</form>   

</div>             



</body>

</html>