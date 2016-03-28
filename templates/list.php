<?php $title="List of posts" ?>
<?php ob_start() ?>
<ul>
    <?php foreach ($posts as $post): ?>
    <li>
        <a href="index.php/show/?id=<?php echo $post['id'] ?>">
            <?php echo $post['title']?>
        </a>
    </li>
    <?php endforeach;?>
</ul>
<?php $content = ob_get_clean()?>

<?php include 'layout.php'?>
