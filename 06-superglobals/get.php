<?php

var_dump( $_GET );

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Unsere Anwendung</title>
    </head>
    <body>
        <h1>Hallo, <?= $_GET[ 'username' ] ?? 'Unbekannter' ?></h1>
        <form method="get">
            <input type="text" name="username">
            <input type="radio" name="gender" value="male">
            <label>Male</label>
            <input type="radio" name="gender" value="female">
            <label>Female</label>
            <input type="submit" value="Abschicken">
        </form>
    </body>
</html>