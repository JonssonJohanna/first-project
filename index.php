<?php
require __DIR__ . '/php/header.php';
require __DIR__ . '/php/data.php';
require __DIR__ . '/php/functions.php';
?>

<h1>Official Website for Gunno</h1>

<div class="container">
    <div class="box">
        <?php foreach ($albums as $album) :
            $artist = $album['artist'];
            $single = $album['single'];
            $image = $album['image'];
        ?>
            <ul>
                <li><img src="<?php echo $image; ?>" width="80px" height="80px"></li>
                <li><?php echo $artist; ?></li>
                <li><?php echo $single; ?></li>
            </ul>


        <?php endforeach; ?>
        <p class="text"><?php $description = getDescription('Gunno', 1, 'post-punk');
                        echo $description; ?></p>
        <p class="button"><?php echo '<a href="https://drive.google.com/file/d/1vVs2fFyh7bXxaGTz3zVwY75xBvpZNzUQ/view?ts=61412f10" target="_blank">For more music</a>';
                            ?></p>

    </div>

</div>

</p>
<?php
require __DIR__ . '/php/footer.php';
?>
