// document.addEventListener("DOMContentLoaded", function () {
//   // Only select dropdown items within the language switcher
//   var dropdown = document.getElementById("languageDropdown");
//   var dropdownItems = dropdown.querySelectorAll(".dropdown-item");

//   dropdownItems.forEach(function (item) {
//     item.addEventListener("click", function (e) {
//       // Prevent the default anchor action
//       e.preventDefault();

//       var lang = this.getAttribute("data-lang");
//       var flagSrc = this.querySelector("img").getAttribute("src");
//       var languageText = this.textContent.trim();

//       // Update the button with the selected language
//       var dropdownButton = dropdown.querySelector(".dropdown-toggle");
//       var flagIcon = dropdownButton.querySelector("img");

//       flagIcon.setAttribute("src", flagSrc);
//       flagIcon.setAttribute("alt", languageText);
//       dropdownButton.textContent = languageText;
//       dropdownButton.insertBefore(flagIcon, dropdownButton.firstChild);

//       switchLanguage(lang);
//     });
//   });
// });

function switchLanguage(lang) {
  // Your language switching logic here
  console.log("Language switched to:", lang);
  // Potentially change the page content based on the selected language
}
