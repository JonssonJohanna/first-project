<?php
require __DIR__ . '/php/header.php';
require __DIR__ . '/php/data.php';
require __DIR__ . '/php/functions.php';
?>

<main>
    <h1>Official Website for Gunno</h1>

    <div class="container">
        <div class="box">

            <h2 class="text">
                <?php echo $description; ?>
            </h2>

            <?php foreach ($albums as $album) :
                $review = $album['review'];
                $image = $album['image'];
                $alt = $album['alt'];
                $single = $album['single'];
                $artist = $album['artist'];
                $date = $album['release date'];
            ?>
                <ul>
                    <li class="review"><?php echo $review; ?></li>
                    <li class="image"><img src="<?php echo $image; ?>" alt="<?php echo $alt; ?>" width="300px" height="300px"></li>

                    <li class="single"><?php echo $single; ?></li>
                    <li class="artist"><?php echo $artist; ?></li>
                    <li class="date"><?php if ($date <= 2021) {
                                            echo 'Album out now!';
                                        } elseif ($date > 2021 || $date === 2022) {
                                            echo 'Upcoming album. Click below for preview.';
                                        }; ?></li>
                </ul>
            <?php endforeach; ?>

            <p class="button">
                <a href="drive.google.com/file/d/1vVs2fFyh7bXxaGTz3zVwY75xBvpZNzUQ/view?ts=61412f10" target="_blank">New song</a>
            </p>



            <article class="gunnoConcert">

                <p>- - - - - - - - - - - - - - - - - - - - </p>

                <p class="concert">Upcoming concert</p>

                <p>On stage 20 december at Plan B!</p>

                <p><?php echo "Count down until the concert. " . $daysUntilConcert . " days left."; ?></p>

                <p><?php echo "50% off for the first ten people to buy tickets, " . concertTicket(200) . "kr."; ?></p>
            </article>


            <?php foreach ($videoUrl as $video) { ?>

                <iframe width="300" height="300" src="<?php echo $video; ?>" title="Gunno music video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                </iframe>
            <?php
            } ?>

        </div>
    </div>
</main>
<?php
require __DIR__ . '/php/footer.php';
?>
