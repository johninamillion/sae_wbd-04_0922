<?php
    if ( is_loggedin() === FALSE ) {
        redirect( '?page=login', 'profile' );
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Profile</title>
    </head>
    <body>
        <h1>Profile</h1>
    </body>
</html>