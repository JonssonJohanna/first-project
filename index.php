<?php
require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
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
    </div>
</div>

<?php
require __DIR__ . '/footer.php';
?>
