<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
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
                case 'profile':
                    echo "<h1>Login - You need to login!</h1>";
                    break;
                default:
                    echo "<h1>Login</h1>";
                    break;
            }
        ?>
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