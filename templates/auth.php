<?php $title="auth" ?>
<?php ob_start() ?>

<form method="GET" action="api_func.php">
    <input type="text" name="login" placeholder="Your login"/>
    <input type="password" name="password" placeholder="Your password"/>
    <button type="submit" name="logIn">Log in</button>
    <button type="submit" name="signIn">Sign up</button>
</form>

<?php $content = ob_get_clean()?>

<?php include 'layout.php'?>
