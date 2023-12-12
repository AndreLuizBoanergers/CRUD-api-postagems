<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>Administração</title>
</head>
<body>
	<div>
		<form action="index.php" method="post" class="form-control w-50">
			<div class="d-flex">
				<input type="text" class="form-control" placeholder="Titulo" id="titulo">
				
				<input type="text" class="form-control" placeholder="Imagen" id="imgLink">
			</div>
			<div>
				<input type="text" class="form-control w-100" placeholder="SubTitulo" id="subtitulo">
			</div>
			<div>
				<textarea name="" cols="100" rows="10" class="form-control" id="conteudo"></textarea>
			</div>
			<div>
				<input type="submit" name="btn" class="btn btn-success" id="btnAdm">
			</div>
		</form>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<script src="../assets/js/script2.js"></script>
</body>
</html>