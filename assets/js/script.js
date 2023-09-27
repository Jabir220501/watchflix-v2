const baseURL = "http://192.168.0.105:3000";

const getGenre = async (genreID) => {
  try {
    const response = await fetch(`${baseURL}/genre/movie/list`);
    const data = await response.json();
    const genreArray = data.genres;

    const foundGenre = genreArray.find((genre) => genre.id === genreID);

    if (foundGenre) {
      return foundGenre.name;
    }

    return null;
  } catch (error) {
    console.error("Error", error);
    return null;
  }
};

const justReleaseList = async () => {
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
            <a href="movie?id=${movieCard.id}"><img src="${image_url}${movieCard.backdrop_path}" alt="" loading="lazy"></a>
          </div>
          <div class="slider-card-info">
            <div class="slider-card-info__wrapper">
              <h3>${movieCard.original_title}</h3>
              <div class="slider-card-rate-and-genre">
                <span><i class="fa-solid fa-star"></i> ${movieCard.vote_average} <span class="info_genre">| ${genreName || 'N/A'} • <span class="info_type-of-film">Movie</span></span></span>
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
    const response = await fetch(`${baseURL}/movie/popular`);
    const data = await response.json();
    const justRelease = document.querySelector(
      ".popular-of-the-week-slider__container"
    );
    const image_url = "https://image.tmdb.org/t/p/original/";

    for (const movieCard of data.results) {
      const genreName = await getGenre(movieCard.genre_ids[0]);

      const div = document.createElement("div");
      div.classList.add("row-slider-card", "vertical-small-card");
      div.innerHTML = `
      <div class="img-hover__container">
      <a href="#"><img src="https://image.tmdb.org/t/p/original//8YFL5QQVPy3AgrEQxNYVSgiPEbe.jpg"
              alt=""></a>
  </div>
  <div class="slider-card-info">
      <div class="slider-card-info__wrapper">
          <h3>Ant-Man and the Wasp: Quantumania</h3>
      </div>
  </div>
  <div class="slider-card-rate-and-genre">
      <span><i class="fa-solid fa-star"></i> 4.8 <span class="info_genre">| Action • <span
                  class="info_type-of-film">Movie</span>
          </span></span>
  </div>
        `;
      justRelease.appendChild(div);
    }
  } catch (error) {
    console.error("Error", error);
  }
};

popularOfTheWeekList();
