<?php include __DIR__ . "/../post/layout/header.php" ?>

<?php if (!empty($error)) : ?>
    <p><?php echo $error ?></p>
<?php endif; ?>

<form method="POST" method="login">

    <input type="text" name="username">
    <input type="password" name="password">

    <input type="submit" value="Einloggen">


</form>




<?php include __DIR__ . "/../post/layout/footer.php" ?>