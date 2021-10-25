<?php
require __DIR__ . '/php/header.php';
require __DIR__ . '/php/data.php';
require __DIR__ . '/php/functions.php';
?>

<main>
    <h1>Official Website for Gunno</h1>

    <div class="container">
        <div class="box">
            <p class="text"><?php $description = getDescription('Gunno', 2017, 'post-punk');
                            echo $description; ?></p>

            <?php foreach ($albums as $album) :
                $review = $album['review'];
                $image = $album['image'];
                $single = $album['single'];
                $artist = $album['artist'];
                $date = $album['release date'];
            ?>
                <ul>
                    <li class="review"><?php echo $review; ?></li>
                    <li class="image"><img src="<?php echo $image; ?>" width="300px" height="300px"></li>
                    <li class="single"><?php echo $single; ?></li>
                    <li class="artist"><?php echo $artist; ?></li>
                    <li class="date"><?php if ($date <= 2021) {
                                            echo 'Album is released, listen to it on spotify!';
                                        } elseif ($date > 2021 || $date === 2022) {
                                            echo 'Upcoming album. Click on the link below for a preview.';
                                        }; ?></li>
                </ul>


            <?php endforeach; ?>
            <p class="button"><?php echo '<a href="https://drive.google.com/file/d/1vVs2fFyh7bXxaGTz3zVwY75xBvpZNzUQ/view?ts=61412f10" target="_blank">New song</a>';
                                ?></p>
            <p class="concert">Gunno on stage 20 december on Plan B!</p>

            <p class="concertDay"><?php echo "There is " . $daysUntilConcert . " days until the concert. See the great offer below for the first people to get tickets."; ?></p>

            <p class="concertTickets"><?php echo "The first 10 people to buy concert tickets get 50% off and only has to pay " . concertTicket(200) . "kr"; ?></p>


            <?php foreach ($videoUrl as $video) { ?>
                <iframe width="300" height="300" src="<?php echo $video; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php
            } ?>

        </div>


    </div>

    </p>
</main>
<?php
require __DIR__ . '/php/footer.php';
?>
