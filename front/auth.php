<?php
require_once('head.php');
require_once('../back/functions.php');
?>

<header class="container text-center my-5">
	<p class="h1">Вход в систему автосервиса</p>
</header>
<main class="container d-flex justify-content-center align-items-center">
	<div class="row d-flex justify-content-center align-items-center w-50">
		<form action="../back/auth_helper.php" method="post">
			<div class="form-group">
				<label for="login">Логин</label>
				<input type="text" class="form-control" id="login" name="login">
			</div>
			<div class="form-group">
				<label for="password">Пароль</label>
				<input type="password" class="form-control" id="password" name="password">
			</div>
			<button type="submit" class="btn btn-primary mt-3">Войти</button>
		</form>
	</div>
</main>
<?php
require_once('footer.php');
?>