<?php

echo "\$_POST:";
echo "<pre>";
var_dump( $_POST );
echo "</pre>";
echo "\$_FILES:";
echo "<pre>";
var_dump( $_FILES );
echo "</pre>";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Unsere Anwendung</title>
    </head>
    <body>
        <h1>Hallo, <?= $_POST[ 'username' ] ?? 'Unbekannter' ?></h1>
        <form method="post" enctype="multipart/form-data">
            <input type="text" name="username">
            <input type="file" name="profilepicture" accept="image/*">
            <input type="submit" value="Abschicken">
        </form>
    </body>
</html>

