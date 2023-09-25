<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watchflix | Your Home for Movie Magic</title>
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <script src="https://kit.fontawesome.com/779df3ae2b.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include 'includes/header/header.php';
    ?>
    <section id="hero">
        <div class="slider__container">
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
                    <div class="slider-description">
                        <p>Thirty years after defeating the Galactic Empire, Han Solo and
                            his allies face a new threat from the evil Kylo Ren and his army of Stormtroopers.</p>
                    </div>
                    <div class="slider-buttons">
                        <div class="watch-trailer-btn slider-btn">
                            <button><i class="fa-solid fa-circle-play"></i><a href="#">Watch Trailer</a></button>
                        </div>
                        <div class="add-watchlist-btn slider-btn">
                            <button><i class="fa-regular fa-bookmark"></i><a href="#">Add Watchlist</a></button>
                        </div>
                    </div>
                    <div class="slider-directors">
                        <div class="dot dot-1 active"></div>
                        <div class="dot dot-2"></div>
                        <div class="dot dot-3"></div>
                        <div class="dot dot-3"></div>
                        <div class="dot dot-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main id="main">
        <div class="main__wrapper">
            <!-- Just Release -->
            <section class="just-release row">
                <div class="label">
                    <h2>Just Release</h2>
                </div>
                <div class="just-release-slider__container row-slider__container">
                    <div class="row-slider-card v-big">
                        <div class="img-hover__container">
                            <a href="#"><img src="https://image.tmdb.org/t/p/original//rJHC1RUORuUhtfNb4Npclx0xnOf.jpg"
                                    alt=""></a>
                        </div>
                        <div class="slider-card-info">
                            <div class="slider-card-info__wrapper">
                                <h3>Uncharted</h3>
                                <div class="slider-card-rate-and-genre">
                                    <span><i class="fa-solid fa-star"></i> 4.8 | <span>Action • <span>Movie</span>
                                        </span></span>
                                </div>
                            </div>
                        </div>
                        <div class="slider-card-overlay"></div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>

</html>