<?php

global $errors;

echo "<pre>";
var_dump( $errors );
echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Register</title>
    </head>
    <body>
        <h1><?= _( 'Register' ) ?></h1>
        <form method="post">
            <div>
                <?php print_input_errors( $errors, 'username' ); ?>
                <label for="username"><?= _( 'Username' ) ?></label>
                <input id="username" type="text" name="username">
            </div>
                <?php print_input_errors( $errors, 'gender' ); ?>
                <input id="gender--female" type="radio" name="gender" value="female">
                <label for="gender--female"><?= _( 'Female' ) ?></label>
                <input id="gender--male" type="radio" name="gender" value="male">
                <label for="gender--male"><?= _( 'Male' ) ?></label>
            </div>
            <div>
                <?php print_input_errors( $errors, 'country' ); ?>
                <label for="country"><?= _( 'Country' ) ?></label>
                <select name="country">
                    <option value="germany"><?= _( 'Germany' ) ?></option>
                    <option value="austria"><?= _( 'Austria' ) ?></option>
                    <option value="swiss"><?= _( 'Swiss' ) ?></option>
                </select>
            </div>
            <div>
                <?php print_input_errors( $errors, 'email' ); ?>
                <label for="email"><?= _( 'E-Mai Address' ) ?></label>
                <input id="email" type="email" name="email">
            </div>
            <div>
                <?php print_input_errors( $errors, 'password' ); ?>
                <label for="password"><?= _( 'Password' ) ?></label>
                <input id="password" type="password" name="password">
            </div>
            <div>
                <?php print_input_errors( $errors, 'password_repeat' ); ?>
                <label for="password_repeat"><?= _( 'Repeat Password' ) ?></label>
                <input id="password_repeat" type="password" name="password_repeat">
            </div>
            <div>
                <?php print_input_errors( $errors, 'tos' ); ?>
                <input id="tos" type="checkbox" name="tos" value="1">
                <label for="tos"><?= _( 'Accept Terms of Service' ) ?></label>
            </div>
            <div>
                <input type="submit" value="<?= _( 'Register' ) ?>">
            </div>
        </form>
    </body>
</html>