<?php
// pola posta: title, content, category, created_at

// $posts = [
//     ['id' => 1, 'title' => "Tytuł 1 MKw", 'content' => 'Hello world', 'category' => 'General'],
//     ['id' => 2, 'title' => "Tytuł 2 ABC", 'content' => 'Hello world 2', 'category' => 'General'],
// ];

$con = mysqli_connect("localhost","root","","blogmkw");
$result = mysqli_query($con, 'SELECT * FROM posts');
while($row = mysqli_fetch_assoc($result)) {
    $posts[$row['id']] = $row;
}
print_r($posts);
$result = mysqli_query($con, 'SELECT DISTINCT category FROM posts ORDER BY category');
while($row = mysqli_fetch_assoc($result)) {
    $categories[] = $row;
}

mysqli_close($con);

// print_r($posts);