<?php $title="auth" ?>
<?php ob_start() ?>

<form method="post" action="../index.php">
    <input type="text" name="login" placeholder="Your login"/>
    <input type="password" name="password" placeholder="Your password"/>
    <button type="submit" name="logIn">Login</button>
</form>

<?php $content = ob_get_clean()?>

<?php include 'layout.php'?>
