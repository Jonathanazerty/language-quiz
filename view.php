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
		<h1><u>Give the right translation for the following Spanish word</u></h1>
		<!-- display message that the purchase is successful-->
		<!-- <?php /*if (!empty($result['message'])) { ?>
			<div class="alert <?php 
				if ($result['errors']) { echo 'alert-danger'; } 
				else { echo 'alert-success'; } ?>">
				<?= $result['message'] */?>
			</div> -->
			<br>
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
						<label for="spanishword"><h1><?= $game->randomWord->spanishWord ?></h1></label>
						<input type="text" name="userInput" id="userInput" class="form-control" >
					</div>
				</div>

			</fieldset>
			<br>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
			<button type="reset" name="reset" class="btn btn-primary">Start over</button>
			<br>
		</form>

		<h3 class="message"> <?= $game->message ?></h3>
		<br>
		<footer>SCORE: You've got <strong> <?php /*echo $totalPoints */?></strong> points.</footer>
		<br><br>
	</div>
</body>
</html>