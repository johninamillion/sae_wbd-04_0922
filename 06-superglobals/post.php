<?php

var_dump( $_POST );

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Unsere Anwendung</title>
    </head>
    <body>
        <h1>Hallo, <?= $_POST[ 'username' ] ?? 'Unbekannter' ?></h1>
        <form method="post">
            <input type="text" name="username">
            <input type="radio" name="gender" value="male">
            <label>Male</label>
            <input type="radio" name="gender" value="female">
            <label>Female</label>
            <input type="submit" value="Abschicken">
        </form>
    </body>
</html>

