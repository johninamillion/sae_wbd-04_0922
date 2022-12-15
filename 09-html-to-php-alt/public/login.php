<?php
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php';

    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'users.php';
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'login.php';
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates.php';

    /** @var array $errors */
    $errors = [];

    // Abfragen ob der Request an den Server in der Methode 'POST' abgeschickt wurde
    if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
        login( $errors );
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form method="post">
            <div>
                <?php print_input_errors( $errors, 'login' ); ?>
                <label for="username">Username</label>
                <input id="username" type="text" name="username">
            </div>
            <div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password">
            </div>
            <div>
                <input type="submit" value="Login">
                <a href="register.php">Register</a>
            </div>
        </form>
    </body>
</html>