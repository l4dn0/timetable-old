<?php
	require_once 'db_connect.php';
    require_once 'query.php';
    include 'header.php';
    if ($_SESSION['user'] == NULL) {
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = 'index.php';
		header("Location: http://$host$uri/$extra");
	}
	else {
?>

<main class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="main round pad_b_10">
				<div class="ml-3 mr-3">
					<h1 class="text-center title">Настройки профиля</h1>
					<a href="reset.php">Сменить пароль</a><br>
					<span class="point_desc">Да, пока больше ничего не доступно</span>
				</div>
			</div>
		</div>
	</div>
</main>

<?
	}
	include 'footer.php';
?>