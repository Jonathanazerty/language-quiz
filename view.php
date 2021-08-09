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
			<?php /*
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="name">NAME:</label>
					<input type="name" id="name" name="name" class="form-control" value="<?php echo isset($_SESSION['name']) ? $_SESSION['name'] : '' ?>" />
				</div>
			</div>
			*/ ?>

			<fieldset>
				<div class="form-row">
					<div class="form-group col-md-3">
						<label for="word">(word)</label>
						<input type="text" name="word" id="word" class="form-control" />
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