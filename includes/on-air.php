<?php
/////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
/// Aenderungen sind lediglich zwischen " und " vorzunehmen. Sonst kann es boese enden \\\
/////////////////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

// Hier kommt deine URL mit kompletten Pfadweg zum Ordner der Bilder rein.
$pfadweg = "//deine-domain.de/laut-fm-streambox/uploads/";

// Hier kannst du das Format des Bildes eintragen. (jpg, png, gif etc.)
$bildformat = "png";

// Hier kannst du die Hoehe des Bildes einstellen.
$hoehe = "150";

// Hier kannst du die Breite des Bildes einstellen.
$breite = "150";


//------------------------------------------------------------------------------\\
///////////////////////////// Ab hier nix mehr Aendern \\\\\\\\\\\\\\\\\\\\\\\\\\\
//------------------------------------------------------------------------------\\

?>

<?php
###############################################################################
## $Id: current-station-info.php,v 1.0 2011/04/05 14:10:00 paulisch Exp $	 ##
##  ------------------------------------------------------------------------ ##
##      current-station-info.php - Example Usage of the laut.fm API          ##
##                  Copyright (c) 2011 laut.fm - Dennis Paulisch             ##
##                       <http://www.laut.fm/>                               ##
##  ------------------------------------------------------------------------ ##
##					>>>  Bearbeitet von Paeddy  <<<							 ##
###############################################################################
?>
<!DOCTYPE html>
<html>
  <head>
	  <script type="text/javascript" src="https://api.laut.fm/js_tools/lautfm_js_tools.0.9.1.js"></script>
    <title>OnAir</title>
    <meta content='text/html;charset=utf-8' http-equiv='content-type'>
  </head>
 <body>
<?php

// Die Stations-Infos aus der API abfragen:
$json_station = file_get_contents("https://api.laut.fm/station/".$station);
// zu Debuggen einkommentieren:
// var_dump($http_response_header);
// var_dump($json_station);

// Die Anwort von JSON in einen assoziativen Object umwandeln:
$obj_station = json_decode($json_station);

// Hier werden Leerzeichen durch bindestriche ersetzt.
$string = $obj_station->current_playlist->name;
$string = str_replace(" ", "-", $string);

// Ausgabe des Bildes:
echo('<img src='.$pfadweg.''.$string.'.'.$bildformat.' width="'.$breite.'" height="'.$hoehe.'">'); 

?>
 </body>
</html>