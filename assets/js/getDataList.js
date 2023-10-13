import roundToOneDecimalPlace from "../../utils/numberUtils.js";

const baseURL = "http://localhost:3000/api";

const justReleaseList = async () => {
  try {
    const response = await fetch(`${baseURL}/movie/upcoming`);
    const data = await response.json();
    const justRelease = document.querySelector(
      ".just-release-slider__container"
    );
    const image_url = "https://image.tmdb.org/t/p/original/";
    for (const movieCard of data.results) {
      const div = document.createElement("div");
      div.classList.add("row-slider-card", "vertical-large-card");
      div.innerHTML = `
            <div class="img-hover__container">
              <a href="movie?id=${movieCard.id}"><img src="${image_url}${
        movieCard.poster_path
      }" alt="" loading="lazy"></a>
            </div>
            <div class="slider-card-info">
              <div class="slider-card-info__wrapper">
                <h3>${movieCard.title}</h3>
                <div class="slider-card-rate-and-genre">
                  <span><i class="fa-solid fa-star"></i> ${roundToOneDecimalPlace(
                    movieCard.vote_average
                  )} <span class="info_genre">| ${
        movieCard.genre_names[0] || "N/A"
      } • <span class="info_type-of-film">Movie</span></span></span>
                </div>
              </div>
            </div>
            <div class="slider-card-overlay"></div>
          `;
      justRelease.appendChild(div);
    }
  } catch (error) {
    console.error("Error", error);
  }
};

justReleaseList();

const popularOfTheWeekList = async () => {
  try {
    const response = await fetch(`${baseURL}/trending/movie`);
    const data = await response.json();
    const justRelease = document.querySelector(
      ".popular-of-the-week-slider__container"
    );
    const image_url = "https://image.tmdb.org/t/p/original/";

    let increaseNumber = 1;
    for (const movieCard of data.results) {
      const div = document.createElement("div");
      div.classList.add("row-slider-card", "vertical-small-card");
      div.innerHTML = `
        <div class="card-number-order">
            <h4>${increaseNumber++}</h4>
        </div>
        <div class="img-hover__container">
            <a href="${
              movieCard.media_type == "movie" ? "movie" : "tv-show"
            }?id=${movieCard.id}"><img src="${image_url}${
        movieCard.poster_path
      }"alt=""></a>
        </div>
        <div class="slider-card-info">
            <div class="slider-card-info__wrapper">
                <h3>${movieCard.title ? movieCard.title : movieCard.name}</h3>
                <span class="info_genre">Action • Thriller</span>
                <div class="slider-card-rate-and-genre">
                    <span><i class="fa-solid fa-star"></i> ${roundToOneDecimalPlace(
                      movieCard.vote_average
                    )} <span class="info_type-of-film">|
                            ${movieCard.media_type}</span>
                    </span></span>
                </div>
            </div>
        </div>
        `;
      justRelease.appendChild(div);
    }
  } catch (error) {
    console.error("Error", error);
  }
};
popularOfTheWeekList();

const randomMovies = async () => {
  try {
    const response = await fetch(`${baseURL}/discover/movie`);
    const data = await response.json();
    const randomMovies = document.querySelector(".movies-slider__container");
    const image_url = "https://image.tmdb.org/t/p/original/";

    for (const movieCard of data.results) {
      const div = document.createElement("div");
      div.classList.add("row-slider-card", "horizontal-card");
      div.innerHTML = `
        <div class="img-hover__container">
        <a href="movie?id=${movieCard.id}"><img src="${image_url}${
        movieCard.backdrop_path
      }"alt=""></a>
    </div>
    <div class="slider-card-info">
        <div class="slider-card-info__wrapper">
        <h3>${movieCard.original_title}</h3>
        </div>
    </div>
    <div class="slider-card-rate-and-genre">
        <span><i class="fa-solid fa-star"></i> ${roundToOneDecimalPlace(
          movieCard.vote_average
        )} <span class="info_genre">|  ${
        movieCard.genre_names[0] || "N/A"
      } • <span
                    class="info_type-of-film">Movie</span>
            </span></span>
    </div>
        `;
      randomMovies.appendChild(div);
    }
  } catch (error) {
    console.error("Error", error);
  }
};
randomMovies();

const randomSeries = async () => {
  try {
    const response = await fetch(`${baseURL}/trending/tv`);
    const data = await response.json();
    const randomSeries = document.querySelector(".series-slider__container");
    const image_url = "https://image.tmdb.org/t/p/original/";

    for (const serieCard of data.results) {
      const div = document.createElement("div");
      div.classList.add("row-slider-card", "horizontal-card");
      div.innerHTML = `
        <div class="img-hover__container">
        <a href="tv-show?id=${serieCard.id}"><img src="${image_url}${
        serieCard.backdrop_path
      }"alt=""></a>
    </div>
    <div class="slider-card-info">
        <div class="slider-card-info__wrapper">
        <h3>${serieCard.name}</h3>
        </div>
    </div>
    <div class="slider-card-rate-and-genre">
        <span><i class="fa-solid fa-star"></i> ${roundToOneDecimalPlace(
          serieCard.vote_average
        )} <span class="info_genre">|  ${
        serieCard.genre_names[0] || "N/A"
      } • <span
                    class="info_type-of-film">${serieCard.media_type}</span>
            </span></span>
    </div>
        `;
      randomSeries.appendChild(div);
    }
  } catch (error) {
    console.error("Error", error);
  }
};
randomSeries();
