<?php include "info.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Мероприятие</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">
	<link href="../css/background.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet"> 
</head>

<body>
<nav class="navbar navbar-dark bg-dark">
	<a class="navbar-brand" href="../index.html"> <img src="../images/navbar.jpg" width="30" height="30" class="d-inline-block align-top"
		alt=""> Ваше мероприятие </a>
</nav>
	<div class="background">
		<div class="container">
			<?php if ($_POST['age'] >= 18): ?>
				<div class="card text-white bg-dark mb-3 card-secondary" style="width: 45rem;">
					<div class="card-body">
						<h5 class="card-title">Поздравляем! Вы официально зарегестрированы в качестве участника данного праздника. Ваши пожелания очень важны для нас.</h5>
						<table class="table table-hover table-dark" style="text-align: center;">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">ФИО</th>
									<th scope="col">Возраст</th>
									<th scope="col">Статус</th>
									<th scope="col">Пожелания</th>
								</tr>
							</thead>
							<tr>
								<td>
									<?=++$i . '.' ?>
								</td>
								<td>Дитрихсон Валерьян Сергеевич</td>
								<td>82</td>
								<td>Студент</td>
								<td>Какое-то пожелание...</td>
							</tr>
							<tr>
								<td>
									<?=++$i . '.' ?>
								</td>
								<td>
									<?=$name?>
								</td>
								<td>
									<?=$age?>
								</td>
								<td>
									<?=$role?>
								</td>
								<td>
									<?=$comments?>
								</td>
							</tr>
						</table> <a href="../index.html" class="btn btn-primary">Назад</a> 
					</div>
				</div>
				
					<?php else: ?>
						<div class="container">
							<div class="text-white bg-danger mb-3 card-secondary" style="width: 25rem;">
								<div class="card-body">
									<div class="card-header">
										<h3>В регистрации отказано!</h3>
									</div>
									<h5 class="card-title">Для посещения мероприятия Вам должно быть 18 лет.</h5>
									<p class="card-text">Возвращайтесь через
										<?= 18 - $age?> лет, когда достигнете необходимого возраста.</p> <a href="../index.html" class="btn btn-primary">Назад</a>	
								</div>
							</div>
						</div>
					<?php endif; ?>
						
		</div>
	</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
</body>

</html>