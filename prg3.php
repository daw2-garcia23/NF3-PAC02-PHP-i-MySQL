<?php 
    $db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');
    echo ("Has entrado <br>");
    mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

    $query= 'SELECT people_fullname,(SELECT people_fullname FROM people WHERE people.people_id = movie.movie_director) ,movie_name
        FROM people,movie
        WHERE people.people_id = movie.movie_leadactor;';
        mysqli_query($db, $query) or die(mysqli_error($db));
        echo("consulta hecha");
?>