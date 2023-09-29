<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchflix | Your Home for Movie Magic</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    
    <!-- CSS Libraries -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/779df3ae2b.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include 'includes/header/header.php';
    ?>
    <section id="hero">
        <div class="slider__container">
            <div class="swiper-wrapper">
                <div class="slide-item">
                    <div class="slider-image">
                        <img src="https://image.tmdb.org/t/p/original//8BTsTfln4jlQrLXUBquXJ0ASQy9.jpg">
                        <div class="slider-image-overlay"></div>
                    </div>
                    <div class="slider-info">
                        <div class="slider-type-of-film">
                            <button>Movie</button>
                        </div>
                        <div class="slider-title">
                            <h2>Star Wars: The Force Awaken</h2>
                        </div>
                        <div class="slider-film-info">
                            <h5>2h40m • 2022 • Fantasy • Actions</h5>
                        </div>
                        <div class="slider-buttons">
                            <div class="watch-trailer-btn slider-btn">
                                <button><i class="fa-solid fa-circle-play"></i><a href="#">Watch Trailer</a></button>
                            </div>
                            <div class="add-watchlist-btn slider-btn">
                                <button><i class="fa-regular fa-bookmark"></i><a href="#">Add Watchlist</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main id="main">
        <div class="main__wrapper">
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