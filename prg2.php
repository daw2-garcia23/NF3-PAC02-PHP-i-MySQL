<?php
$db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');
    echo ("Has entrado <br>");
    mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

    $query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (7, "Joel Garcia", 1, 0),
        (8, "Ruben Redondo", 0, 1),
        (9, "Sergio Cotto", 0, 1)';
        mysqli_query($db,$query) or die(mysqli_error($db));
        echo("hecho")
?> 