<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link href="/assets/css/application.css" rel="stylesheet">
    </head>
    <body>
        <?php
            switch( $_GET[ 'redirect' ] ?? NULL ) {
                case 'logout':
                    echo "<h1>Login - Welcome Back!</h1>";
                    break;
                case 'register':
                    echo "<h1>Login - Welcome on Board!</h1>";
                    break;
                default:
                    echo "<h1>Login</h1>";
                    break;
            }
        ?>
        <form method="post">
            <?php print_input_errors( $errors, 'login' );  ?>
            <div>
                <label for="username">Username</label>
                <input id="username" type="text" name="username" value="<?= $_POST[ 'username' ] ?? '' ?>">
            </div>
                <label for="password">Password</label>
                <input id="password" type="password" name="password">
            </div>
            <div>
                <input type="submit" value="Login">
                <a href="?page=register">Register</a>
            </div>
        </form>
    </body>
</html>
