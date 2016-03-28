<?php $title=$post['title'] ?>
<?php ob_start() ?>
    <h1><?php echo $post['title']?></h1>
    <div class="body"><?php echo $post['text']?></div>
<?php $content = ob_get_clean()?>
<?php include 'layout.php'?>