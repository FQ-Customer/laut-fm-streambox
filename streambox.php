<?php
	$station = "deine-station";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laut.fm Streambox!</title>

    <meta name="description" content="Laut.FM Streambox based on Bootstrap 4.">
    <meta name="author" content="FQ-Customer">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
	  <script>
            $(document).ready(function(){
            setInterval(function(){
            $("#cs").load('includes/current-song.php')
            }, 30000);
            setInterval(function(){
            $("#cw").load('includes/current-show.php')
            }, 1800000);
            });
          </script>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<p>&nbsp;</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<h3>
						ON AIR
					</h3>
					<div id="cs"><?php include('includes/on-air.php');?></div>
				</div>
				<div class="col-md-4">
					<h2>
						Aktuelle Sendung
					</h2>
					
					<div id="cw"><?php include('includes/current-show.php');?></div>
					
					<p>
						
					</p>
				</div>
				<div class="col-md-4">
					<h3>
						Player Wählen
					</h3>
					<div class="dropdown">
						<a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Deine Player
						</a>

						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" href="https://laut.fm/<?php echo $station;?>">Laut.FM HTML5 Player</a>
							<a class="dropdown-item" href="https://stream.laut.fm/<?php echo $station;?>.m3u">Player Datei</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h2 style="text-transform:uppercase;">
						Gerade l&auml;uft auf <?php echo $station; ?>
					</h2>
					
						<div id="cs"><?php include('includes/current-song.php');?></div>
					
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</body>
</html>