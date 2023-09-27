const express = require("express");
const axios = require("axios");
const cors = require('cors');
const app = express();

app.use(cors());

require('dotenv').config();
const apiKey = "a527eb9bc54324ce4f762ac2b6d36ae6";

// Function to fetch movie data
async function fetchMovieData(apiEndpoint, res) {
  const apiUrl = `https://api.themoviedb.org/3${apiEndpoint}?api_key=${apiKey}`;
  try {
    const response = await axios.get(apiUrl);
    res.json(response.data);
  } catch (error) {
    console.error(error);
    res.status(500).json({ error: "Internal Server Error" });
  }
}

// Genre
app.get("/genre/movie/list", (req, res) => {
  fetchMovieData("/genre/movie/list", res);
});

// Just Release
app.get("/movie/upcoming", (req, res) => {
  fetchMovieData("/movie/upcoming", res);
});

// Popular Movie
app.get("/movie/popular", (req, res) => {
  fetchMovieData("/movie/popular", res);
});

app.listen(3000, () => {
  console.log("Server is running on port 3000");
});
