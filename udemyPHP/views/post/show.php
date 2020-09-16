<?php include __DIR__ . "/layout/header.php" ?>



<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo e($post["title"]); ?></h3>
    </div>
    <div class="panel-body">
        <?php echo str_replace("\n", "<br />", e($post["content"])); ?>
    </div>
</div>

<ul class="list-group">
    <?php foreach ($comments as $comment) : ?>
        <li class="list-group-item">
            <?php echo e($comment->content);  ?>
        </li>
    <?php endforeach; ?>
</ul>

<form method="post" action="post?id=<?php echo e($post['id']); ?>">
    <textarea class="form-control" name="content"></textarea>

    <br />
    <input type="submit" value="Kommentar hinzufügen" class="btn btn-primary">
</form>
<br />
<br />

<?php include __DIR__ . "/layout/footer.php" ?>