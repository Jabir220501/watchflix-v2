<header class="header">
    <div class="logo">
        <h2>Watchflix</h2>
    </div>
    <nav class="navbar">
        <div class="hamburger-lines">
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
        </div>
        <div class="nav-menu">
            <ul>
                <li class="home"><a href="/Personal/myProjects/watchflix-v2/">Home</a></li>
                <li class="discover"><a href="discover">Discover</a></li>
                <li class="movie-release"><a href="movie-release">Movie Release</a></li>
                <li class="about"><a href="about">About</a></li>
            </ul>
        </div>
        <div class="search-button-sm">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </nav>
    <div class="interactive-buttons">
        <div class="search-button">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="auth-buttons">
            <div class="sign-up-btn auth-btn">
                <button><a href="signup">Sign Up</a></button>
            </div>
            <div class="login-btn auth-btn">
                <button><a href="login">Login</a></button>
            </div>
        </div>
    </div>
</header>

<script>
const extractPath = () => {
    const parts = window.location.href.split("/watchflix-v2/");
    const currentURL = parts[1];

    const homeLink = document.querySelector(".home");
    const discoverLink = document.querySelector(".discover");
    const movieReleaseLink = document.querySelector(".movie-release");
    const aboutLink = document.querySelector(".about");

    homeLink.classList.toggle("link-active", currentURL === "" || currentURL === "#");
    discoverLink.classList.toggle("link-active", currentURL === "discover" || currentURL === "discover/#");
    movieReleaseLink.classList.toggle("link-active", currentURL === "movie-release" || currentURL === "movie-release/#");
    aboutLink.classList.toggle("link-active", currentURL === "about" || currentURL === "about/#");
};

extractPath();


</script>