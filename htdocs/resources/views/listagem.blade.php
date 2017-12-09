<html>
	<head>
		<title>Controle de Estoque</title>
		<link href="/css/app.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
			<h1>Listagem de produtos Laravel</h1>
			<table class="table table-striped table-hover table-bordered">
				<?php foreach ($produtos as $p): ?>
					<tr>
						<td><?= $p->nome ?></<td>
						<td><?= $p->valor ?></<td>
						<td><?= $p->descricao ?></<td>
						<td><?= $p->quantidade ?></<td>
					</tr>
				<?php endforeach ?>
			</table>
		</div>
	</body>
</html>