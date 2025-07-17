<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Simple Blog</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Blog Posts</h1>
    <a href="add_post.php">+ New Post</a>
    <ul>
        <?php
        $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<li><strong>" . htmlspecialchars($row['title']) . "</strong><br>" . nl2br(htmlspecialchars($row['content'])) . "</li><hr>";
        }
        ?>
    </ul>
</body>
</html>
