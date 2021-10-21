<?php
require __DIR__ . '/php/header.php';
require __DIR__ . '/php/data.php';
require __DIR__ . '/php/functions.php';
?>

<h1>Official Website for Gunno</h1>

<div class="container">
    <div class="box">
        <?php foreach ($albums as $album) :
            $review = $album['review'];
            $artist = $album['artist'];
            $single = $album['single'];
            $image = $album['image'];
            $date = $album['release date'];
        ?>
            <ul>
                <li class="review"><?php echo $review; ?></li>
                <li class="image"><img src="<?php echo $image; ?>" width="260px" height="260px"></li>
                <li class="artist"><?php echo $artist; ?></li>
                <li class="single"><?php echo $single; ?></li>
                <li class="date"><?php if ($date <= 2021) {
                                        echo 'Album is released, listen to it on spotify!';
                                    } elseif ($date > 2021 || $date === 2022) {
                                        echo 'Upcoming album release';
                                    }; ?></li>
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
