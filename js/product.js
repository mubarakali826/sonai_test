document.addEventListener("DOMContentLoaded", function () {
  var button = document.getElementById("tsDropdownProductsToggleButton");
  var dropdown = document.querySelector(".ts-dropwon-products");

  // Initialize or get the current state from local storage
  var storedData = localStorage.getItem("dropdownVisible");
  var lastUpdated = localStorage.getItem("dropdownLastUpdated");

  var currentTime = new Date().getTime(); // Current time in milliseconds
  var threeHours = 1000 * 60 * 60 * 3; // Three hours in milliseconds

  // If there is no stored data or it's been more than 3 hours, default to 'true' and reset the timer
  if (storedData === null || currentTime - lastUpdated > threeHours) {
    localStorage.setItem("dropdownVisible", "true");
    localStorage.setItem("dropdownLastUpdated", currentTime.toString());
  }

  // Apply the visibility state from local storage
  // var dropdownVisible = localStorage.getItem("dropdownVisible") === "true";
  // if (dropdownVisible) {
  //   dropdown.classList.remove("d-none");
  // } else {
  //   dropdown.classList.add("d-none");
  // }

  // Event listener for the button
  button.addEventListener("click", function () {
    // Toggle the 'd-none' class on click
    dropdown.classList.toggle("d-none");

    // Save the new state to local storage
    var isVisible = dropdown.classList.contains("d-none") ? "false" : "true";
    localStorage.setItem("dropdownVisible", isVisible);
    // Update the timestamp when the change was made
    localStorage.setItem(
      "dropdownLastUpdated",
      new Date().getTime().toString()
    );
  });

  // Assuming you still want to toggle the dropdown on card click as well
  var cards = document.querySelectorAll(".ts-classification-card");
  cards.forEach(function (card) {
    card.addEventListener("click", function () {
      dropdown.classList.toggle("d-none");

      // Update local storage with the new state
      var isVisible = dropdown.classList.contains("d-none") ? "false" : "true";
      localStorage.setItem("dropdownVisible", isVisible);
      // Update the timestamp when the change was made
      localStorage.setItem(
        "dropdownLastUpdated",
        new Date().getTime().toString()
      );
    });
  });
});

var prodcutListSwiper = new Swiper(".prodcutListSwiper", {
  slidesPerView: "auto",
  spaceBetween: 30,
  grabCursor: true,
});

// document
//   .querySelectorAll(".ts-product-title-list__item")
//   .addEventListener("click", function () {
//     console.log("working");
//   });

function showProduct(element) {
  var productId = element.id.split("-")[1]; // Extract the product ID from the element ID
  var swiperSlides = document.querySelectorAll(".swiper-slide");

  swiperSlides.forEach(function (slide) {
    var titleElement = slide.querySelector(".ts-product-title-list__item");
    if (titleElement.id === element.id) {
      titleElement.classList.add("active"); // Add the 'active' class to the clicked slide
      ToggleActiveCards(productId);
    } else {
      titleElement.classList.remove("active"); // Remove the 'active' class from other slides
      ToggleActiveCards(productId);
    }
  });
}

// Product Cards

function ToggleActiveCards(productId) {
  var productCards = document.querySelectorAll(".ts-product-card");
  productCards.forEach(function (card) {
    if (card.id === "product-card-" + productId) {
      card.classList.remove("d-none"); // Add the 'active' class to the matching card
    } else {
      card.classList.add("d-none"); // Remove the 'active' class from other cards
    }
  });
}
