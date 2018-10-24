<?


$json_song = file_get_contents("https://api.laut.fm/station/".$station."/current_song");

$obj_song = json_decode($json_song);
?>

    <?= $obj_song->artist->name;?> - <?=$obj_song->title;?>
