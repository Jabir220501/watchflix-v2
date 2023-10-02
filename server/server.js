const express = require("express");
const axios = require("axios");
const cors = require("cors");
const app = express();

app.use(cors());

require("dotenv").config();
const apiKey = "a527eb9bc54324ce4f762ac2b6d36ae6";

// Function to fetch movie data
async function fetchMovieData(apiEndpoint, res) {
  const apiUrl = `https://api.themoviedb.org/3${apiEndpoint}api_key=${apiKey}`;
  try {
    const response = await axios.get(apiUrl);

    const genreResponse = await axios.get(
      `https://api.themoviedb.org/3/genre/movie/list?api_key=${apiKey}`
    );
    const genreData = genreResponse.data.genres;

    let movieData = [];

    if (response.data.results) {
      // If 'results' property exists, use it
      movieData = response.data.results;
    } else if (Array.isArray(response.data)) {
      // If response data is an array, use it directly
      movieData = response.data;
    } else {
      // Handle other response structures as needed
      movieData = [response.data];
    }

    // Map movie genre IDs to genre names and add them to movie data
    movieData.forEach((film) => {
      if (film.genre_ids && Array.isArray(film.genre_ids)) {
        film.genre_names = film.genre_ids.map((genreId) => {
          const genreName = genreData.find((item) => item.id === genreId);
          return genreName ? genreName.name : null;
        });
      } else {
        film.genre_names = [];
      }
    });

    res.json({ results: movieData, genre: genreData });
  } catch (error) {
    console.error(error);
    res.status(500).json({ error: "Internal Server Error" });
  }
}

// Genre
app.get("/genre/movie/list", (req, res) => {
  fetchMovieData("/genre/movie/list?", res);
});

// Just Release
app.get("/movie/upcoming", (req, res) => {
  fetchMovieData("/movie/upcoming?", res);
});

// Popular Movie
app.get("/trending/movie", (req, res) => {
  fetchMovieData("/trending/all/week?", res);
});

// Random Movies
app.get("/discover/movie", (req, res) => {
  fetchMovieData("/discover/movie?sort_by=popularity.desc&", res);
});

// Random Series
app.get("/trending/tv", (req, res) => {
  fetchMovieData("/trending/tv/week?", res);
});

// Movies by ID
app.get("/movie/:movieId", (req, res) => {
  const movieId = req.params.movieId;
  fetchMovieData(`/movie/${movieId}?`, res);
});

// Similar Movies
app.get("/movie/:movieId/similar", (req, res) => {
  const movieId = req.params.movieId;
  fetchMovieData(`/movie/${movieId}/similar?`, res);
});

app.listen(3000, () => {});
