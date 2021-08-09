<?php // This files is mostly containing things for your view / html ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"
          rel="stylesheet"/>
	<title>The Language Game</title>
</head>
<body>
	<!-- TODO: add a form for the user to play the game -->
	<div class="container">
		<h1>Give the right translation for the Spanish word</h1>
		<!-- display message that the purchase is successful-->
		<?php if (!empty($result['message'])) { ?>
			<div class="alert <?php 
				if ($result['errors']) { echo 'alert-danger'; } 
				else { echo 'alert-success'; } ?>">
				<?= $result['message'] ?>
			</div>
		<form method="post">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="name">NAME:</label>
					<input type="name" id="name" name="name" class="form-control" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : '' ?>" />
				</div>
			</div>

			<fieldset>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="pan">PAN:</label>
						<input type="text" name="pan" id="pan" class="form-control" value="<?= isset($_SESSION['pan']) ? $_SESSION['pan'] : '' ?>" />
					</div>
					<div class="form-group col-md-3">
						<label for="gnomo">GNOMO DE JARDIN:</label>
						<input type="text" id="gnomo" name="gnomo" class="form-control" value="<?= isset($_SESSION['gnomo']) ? $_SESSION['gnomo'] : '' ?>" />
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="huevo">HUEVO:</label>
						<input type="text" id="huevo" name="huevo" class="form-control" value="<?= isset($_SESSION['huevo']) ? $_SESSION['huevo'] : '' ?>" />
					</div>
					<div class="form-group col-md-3">
						<label for="arbusto">ARBUSTO:</label>
						<input type="text" id="arbusto" name="arbusto" class="form-control" value="<?= isset($_SESSION['arbusto']) ? $_SESSION['arbusto'] : '' ?>" />
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="sombrero">SOMBRERO:</label>
						<input type="text" id="sombrero" name="sombrero" class="form-control" value="<?= isset($_SESSION['sombrero']) ? $_SESSION['sombrero'] : '' ?>" />
					</div>
					<div class="form-group col-md-3">
						<label for="puerta">PUERTA:</label>
						<input type="text" id="puerta" name="puerta" class="form-control" value="<?= isset($_SESSION['puerta']) ? $_SESSION['puerta'] : '' ?>" />
					</div>
				</div>

				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="música">MÚSICA:</label>
						<input type="text" id="música" name="música" class="form-control" value="<?= isset($_SESSION['música']) ? $_SESSION['música'] : '' ?>" />
					</div>
					<div class="form-group col-md-3">
						<label for="galleta">GALLETA:</label>
						<input type="text" id="galleta" name="galleta" class="form-control" value="<?= isset($_SESSION['galleta']) ? $_SESSION['galleta'] : '' ?>" />
					</div>
				</div>

			</fieldset>

			<button type="submit" class="btn btn-primary">Order!</button>
			<button type="reset" class="btn btn-primary">Start over</button>

		</form>

		<footer>SCORE: You've got <strong>&euro; <?php echo $totalPoints ?></strong> points.</footer>

	</div>
</body>
</html>