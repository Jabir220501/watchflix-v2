const baseURL = "http://localhost:3000";

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const movieId = urlParams.get("id");

const convertMinutesToHoursAndMinutes = (minutes) => {
  if (typeof minutes !== "number" || isNaN(minutes)) {
    return "Invalid input";
  }

  const hours = Math.floor(minutes / 60);
  const remainingMinutes = minutes % 60;

  if (hours === 0) {
    return `${remainingMinutes} min`;
  } else if (remainingMinutes === 0) {
    return `${hours} hour${hours === 1 ? "" : ""}`;
  } else {
    return `${hours} h${hours === 1 ? "" : ""}${remainingMinutes} min`;
  }
};

const getYearFromDate = (dateString) => {
  const year = dateString.substring(0, 4);
  return year;
};

const roundToOneDecimalPlace = (number) => {
  const roundedNumber = Math.round(number * 10) / 10;

  return roundedNumber;
};

const heroFilm = async () => {
  try {
    const response = await fetch(`${baseURL}/movie/${movieId}`);
    const data = await response.json();
    const heroSection = document.querySelector(".slide-item");
    const image_url = "https://image.tmdb.org/t/p/original/";

    heroSection.innerHTML = `
    <div class="slider-image">
          <img src="${image_url}${data.backdrop_path}">
          <div class="slider-image-overlay"></div>
      </div>
      <div class="slider-info">
          <div class="slider-type-of-film">
              <button>Movie</button>
          </div>
          <div class="slider-title">
              <h2>${data.title}</h2>
          </div>
          <div class="slider-film-info">
              <h5>${convertMinutesToHoursAndMinutes(
                data.runtime
              )} • ${getYearFromDate(
      data.release_date
    )} • Fantasy • Actions</h5>
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
    `;
  } catch (error) {
    console.error("Error", error);
  }
};
heroFilm();

const similarMovies = async () => {
  try {
    const response = await fetch(`${baseURL}/movie/${movieId}/similar`);
    const data = await response.json();
    console.log(data);
    const similarMovies = document.querySelector(".movies-slider__container");
    const image_url = "https://image.tmdb.org/t/p/original/";

    for (const movieCard of data.results) {
      const div = document.createElement("div");
      div.classList.add("row-slider-card", "horizontal-card");
      if(movieCard.backdrop_path == null){

      }else{
        div.innerHTML = `
        <div class="img-hover__container">
        <a href="movie?id=${movieCard.id}"><img src="${image_url}${
          movieCard.backdrop_path
        }"alt=""></a>
    </div>
    <div class="slider-card-info">
        <div class="slider-card-info__wrapper">
        <h3>${movieCard.title}</h3>
        </div>
    </div>
    <div class="slider-card-rate-and-genre">
        <span><i class="fa-solid fa-star"></i> ${roundToOneDecimalPlace(
          movieCard.vote_average
        )} <span class="info_genre">| Action • <span
                    class="info_type-of-film">Movie</span>
            </span></span>
    </div>
        `;
        similarMovies.appendChild(div);
      }
    }
  } catch (error) {
    console.error("Error", error);
  }
};
similarMovies();
