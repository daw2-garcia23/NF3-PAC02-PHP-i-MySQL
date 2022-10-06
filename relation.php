<?php
$db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');
    echo ("Has entrado <br>");

    mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

    $query= 'ALTER TABLE movie
    ADD CONSTRAINT FK_director
    FOREIGN KEY (movie_director) REFERENCES people(people_id)';
    mysqli_query($db,$query) or die (mysqli_error($db)); 
    echo ("Codigo ejecutado correctamente")
?> 
