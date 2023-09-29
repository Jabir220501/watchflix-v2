const baseURL = "http://localhost:3000";

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const movieId = urlParams.get("id");

const heroFilm = async () => {
  try {
    const response = await fetch(`${baseURL}/movie/upcoming`);
    const data = await response.json();
    const justRelease = document.querySelector(
      ".just-release-slider__container"
    );
    const image_url = "https://image.tmdb.org/t/p/original/";

    for (const movieCard of data.results) {
      const genreName = await getGenre(movieCard.genre_ids[0]);

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
        genreName || "N/A"
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
heroFilm();
