<?php


// la lista dei dischi viene letta da un file esterno
// trasformo il contenuto in una stringa
$albumsContent = file_get_contents('./album-list.json');

// trasformo la stringa in un array
$albums = json_decode($albumsContent);

$albumsPoster = [];
if(isset($_GET['actualIndex'])) {
    $albumsPoster = $albums[$_GET['actualIndex']];
} else {
    foreach($albums as $element) {
        $albumsPoster[] = $element -> poster;
    }
}


// indicare che è un file json
header("Content-Type: application/json");

echo json_encode($albumsPoster);