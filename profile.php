<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		html, body{
			height: 100%;
		}
	</style>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
	<div class="col-12  p-3" style="background-color: #171A21;">
		<div class="col-8 mx-auto" >
			<div class="row">
				<div class="col-3" >
					<a href="index.html">
						<img src="logo.png" class="w-100">
					</a>
				</div>
				<div class="col-9 pt-4" >
					<a href="" class="text-light ms-4 text-uppercase">Магазин</a>
					<a href="" class="text-light ms-4 text-uppercase">Сообщество</a>
					<a href="" class="text-light ms-4 text-uppercase">O STEAM</a>
					<a href="" class="text-light ms-4 text-uppercase">Поддержка</a>					
				</div>
			</div>			
		</div>
	</div>
	<div class="col-12" style="background-color: #212429; height: 100%;">
		<div class="col-8 mx-auto p-5 row" style="background-color: #222431; height: 100%;">
			<div class="col-3 ">
				<img src="profile.jfif" class="w-100">
			</div>
			<div class="col-6 text-light">
				<?php 
					$text="коля";
					echo $text;
				?>
				<p class="fs-2">ИМЯ: <?php echo $_GET['name']?></p>
				<p>мыло: <?php echo $_GET['gmail']?></p>
				<p>age: <?php echo $_GET['age']?>
				</p>
					<?php 
						if($_GET['age']<=18){
							echo "<p class='text-success'>Ограничения есть</p>";
						}else{
							echo "<p class='text-danger'>Ограничений нет</p>";
						}
					?>
			</div>
			<div class="col-3 text-light">
				<p class="fs-2">LVL 1</p>
				<button class="btn btn-dark">
					<a href="edit.php" style="text-decoration: none; color: white;">редактировать</a>
				</button>
			</div>
		</div>
	</div>
</body>
</html>