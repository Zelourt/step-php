<?php $title="auth" ?>
<?php ob_start() ?>

<form method="post" action="../index.php">
    <input type="text" placeholder="Your login"/>
    <input type="password" placeholder="Your password"/>
    <button type="submit" name="signUp">Reg</button>
</form>

<?php $content = ob_get_clean()?>

<?php include 'layout.php'?>
