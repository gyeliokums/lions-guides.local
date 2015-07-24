<!doctype html>
<html lang="ru-ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<title>Тест</title>
	<!--<link rel="stylesheet" type="text/css" href="styles/main.css" />-->
	<script type="text/javascript" src="scripts/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="scripts/main.js"></script>
	<script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/style-responsive.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="login-body">
<div class="container`">

	<form action="index.php" method="post" class="form-signin">
		<div class="form-signin-heading text-center">
			<h1 class="sign-title">Вход</h1>
			<img src="images/login-logo.png" alt=""/>
		</div>
		{if $errMsg}<div class="alert alert-danger">{$errMsg}</div>{/if}
		<div class="login-wrap">
			<input type="text" class="form-control" placeholder="Логин" autofocus name="login" />
			<input type="password" class="form-control" placeholder="Пароль" name="password" />
			<button class="btn btn-lg btn-login btn-block" type="submit" name="sent" value="">
				<i class="fa fa-check"></i>
			</button>
		</div>
	</form>
</div>
</body>
</html>