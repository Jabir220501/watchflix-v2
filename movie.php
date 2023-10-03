<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchflix | Your Home for Movie Magic</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="./assets/js/getDataById.js" type="module"></script>
    <?php
    include 'includes/js-libraries.php';
    ?>
</head>

<body>
    <?php
    include 'includes/header/header.php';
    ?>
    <section id="hero">
        <div class="slider__container">
            <div class="swiper-wrapper">
                <div class="slide-item">
                </div>
            </div>
        </div>
    </section>
    <main id="main">
        <div class="main__wrapper">
            <section class="movie-info-and-actor">
                <div class="story-line">
                    <h3>Story Line</h3>
                    <p class="story-line-desc">Loading...</p>
                </div>
            </section>
            <!-- Movies -->
            <section class="movies row">
                <div class="label">
                    <h2>Similar Movies for you</h2>
                </div>
                <div class="movies-slider__container row-slider__container">
                    <div class="row-slider-card horizontal-card">
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>