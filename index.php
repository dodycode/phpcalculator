<!DOCTYPE html>
<html>
<head>
	<title>Hitung Bilangan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="favicon.ico" /> 
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/app.css" />
</head>
<body>
	<div class="container">
		<div class="card">
			<h1 class="heading">Hitung Bilangan</h1>
			<div class="operators">
				<button onclick="setOperator('+')" class="operator">+</button>
				<button onclick="setOperator('-')" class="operator">-</button>
				<button onclick="setOperator('*')" class="operator">*</button>
				<button onclick="setOperator('/')" class="operator">/</button>
				<button onclick="setOperator('%')" class="operator">%</button>
			</div>
			<form id="calculate-form" action="calculate.php" method="POST">
				<div class="math">
					<input type="number" min="0" name="bil1" class="input" placeholder="Insert Number..." required />
					<span id="showOperator">+</span>
					<input id="operator" type="hidden" name="operator" value="+" required />
					<input type="number" min="0" name="bil2" class="input" placeholder="Insert Number..." required />
				</div>
				<div class="submit">
					<input type="submit" class="btn-submit" value="Hitung" />
				</div>
			</form>
		</div>
	</div>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src="js/app.js"></script>
</body>
</html>