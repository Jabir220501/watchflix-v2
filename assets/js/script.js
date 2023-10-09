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

// Modals
const registrationForm = document.querySelector("#signup-form");
// Error
const errorModal = document.querySelector(".error-message-modal");
const errorMessage = document.querySelector(".error-message");
// Success
const successModal = document.querySelector(".success-message-modal");
const successMessage = document.querySelector(".success-message");

registrationForm.addEventListener("submit", function (e) {
  e.preventDefault();

  const formData = new FormData(registrationForm);

  fetch("./handlers/signup.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json()) // Parse the JSON response
    .then((data) => {
      console.log(data);
      if (data.error) {
        errorModal.classList.add("message-modal-active");
        errorMessage.textContent = data.error;
      }else{
        successModal.classList.add("message-modal-active");
        successMessage.textContent = data.success;
        setTimeout(() => {
          document.location.href =
            "http://localhost/Personal/myProject/watchflix-v2";
        }, 1500);
      }
    })
    .catch((error) => {
      console.error("An error occurred:", error);
    });
});
