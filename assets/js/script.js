function showLoader() {
  const loader = document.querySelector(".progress");
  loader.style.width = "0"; 
  loader.style.display = "block"; 
  const maxProgress = 100; 
  const interval = 10;
  const increment = (maxProgress / 1000) * interval; 

  const loaderInterval = setInterval(() => {
    const currentWidth = parseFloat(loader.style.width);
    if (currentWidth < maxProgress) {
      loader.style.width = `${currentWidth + increment}%`;
    } else {
      clearInterval(loaderInterval); 
      setTimeout(() => {
        loader.style.display = "none"; 
      }, 100);
    }
  }, interval);
}

function hideLoader() {
  const loader = document.querySelector(".progress");
  loader.style.display = "none";
}

document.addEventListener("DOMContentLoaded", function () {
  showLoader();
});

setTimeout(() => {
  hideLoader();
}, 3000);
