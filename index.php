<?php
include "data.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>

<body>
    <div class="kategorie">
        <ul>
            <li><a href="index.php">Wszystkie posty</a></li>
            <?php
            foreach ($categories as $category) {
                echo '<li><a href="index.php?category=' . $category['category'] . '">' . $category['category'] . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="posty">
        <?php foreach ($posts as $post) {
            if (key_exists('category', $_GET)) {
                if ($post['category'] == $_GET['category']) {
                    echo '<div class="post">
                <h2>' . $post['title'] . '</h2>
                <a href="post.php?id=' . $post['id'] . '">Link</a>
            </div>';
                }
            } else {
                echo '<div class="post">
                    <h2>' . $post['title'] . '</h2>
                    <a href="post.php?id=' . $post['id'] . '">Link</a>
                </div>';
            }
        } ?>
    </div>
</body>

</html>