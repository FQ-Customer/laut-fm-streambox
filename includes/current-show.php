<?


$json_station = file_get_contents("https://api.laut.fm/station/".$station);

$obj_station = json_decode($json_station);

?>


        Von: <?= $obj_station->current_playlist->hour;?> Uhr - 
        Bis: <?= $obj_station->current_playlist->end_time;?> Uhr
        <?= $obj_station->current_playlist->name;?>
