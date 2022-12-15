<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Feed</title>
    </head>
    <body>
        <h1>Feed</h1>
        <ul>
            <?php foreach( $feed as $post ): ?>
            <li>
                <h2><?= $post[ 'title' ] ?></h2>
                <p><?= $post[ 'post' ] ?></p>
            </li>
            <?php endforeach; ?>
        </ul>
    </body>
</html>
