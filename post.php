<?php
include "data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // foreach ($posts as $post) {
        // if ($post['id'] == $_GET['id']) {
            $post = $posts[$_GET['id']];
            echo '<h1>' . $post['category'] . ' ▶️ ' . $post['title'] . '</h1>
            <h2>' .$post['created_at']. ' </h2>
            <p>' . $post['content'] . '</p>';
        // }
    // }
    ?>

</body>

</html>