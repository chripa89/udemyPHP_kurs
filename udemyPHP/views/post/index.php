<?php include __DIR__ . "/layout/header.php" ?>

<h1>Startseite des Blogs</h1>
<p class="lead"> Das hier ist die Startseite des Blogs</p>
<ul>
    <?php foreach ($posts as $post) : ?>
        <li>
            <a href="post?id=<?php echo $post->id; ?>">
                <?php echo e($post->title); ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>


<?php include __DIR__ . "/layout/footer.php" ?>