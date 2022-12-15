<?php
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config.php';

    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'users.php';
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'register.php';
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'templates.php';

    /** @var array $errors */
    $errors = [];

    // Abfragen ob der Request an den Server in der Methode 'POST' abgeschickt wurde
    if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
        register( $errors );
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <form method="post">
            <div>
                <?php print_input_errors( $errors, 'username' ); ?>
                <label for="username">Username</label>
                <input id="username" type="text" name="username">
            </div>
            <div>
                <?php print_input_errors( $errors, 'gender' ); ?>
                <input id="gender--female" type="radio" name="gender" value="female">
                <label for="gender--female">Female</label>
                <input id="gender--male" type="radio" name="gender" value="male">
                <label for="gender--male">Male</label>
            </div>
            <div>
                <?php print_input_errors( $errors, 'country' ); ?>
                <label for="country">Country</label>
                <select name="country">
                    <option value="austria">Austria</option>
                    <option value="germany">Germany</option>
                    <option value="luxembourg">Luxembourg</option>
                    <option value="swiss">Swiss</option>
                </select>
            </div>
            <div>
                <?php print_input_errors( $errors, 'email' ); ?>
                <label for="email">E-Mai Address</label>
                <input id="email" type="email" name="email">
            </div>
            <div>
                <?php print_input_errors( $errors, 'password' ); ?>
                <label for="password">Password</label>
                <input id="password" type="password" name="password">
            </div>
            <div>
                <?php print_input_errors( $errors, 'tos' ); ?>
                <input id="tos" type="checkbox" name="tos" value="1">
                <label for="tos">Accept Terms of Service</label>
            </div>
            <div>
                <input type="submit" value="Register">
                <a href="login.php">Login</a>
            </div>
        </form>
    </body>
</html>