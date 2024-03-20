<?php


// la lista dei dischi viene letta da un file esterno
// trasformo il contenuto in una stringa
$albumsContent = file_get_contents('./album-list.json');

// trasformo la stringa in un array
$albums = json_decode($albumsContent);



// indicare che è un file json
header("Content-Type: application/json");

echo json_encode($albums);