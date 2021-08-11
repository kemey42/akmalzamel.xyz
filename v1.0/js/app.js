/*
    Custom script for akmalzamel.xyz
 */

// particlesJS.load(@dom-id, @path-json, @callback (optional));
// particlesJS.load('particles-js', '../assets/particles.json', function () {
//     console.log('callback - particles.js config loaded');
// });

// GitHubActivity
GitHubActivity.feed({
  username: "kemey42",
  repository: "", // optional
  selector: "#github-feed",
  limit: 20, // optional
});

// Bootstrap tooltip
var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

var screen_height = screen.height;
var navbar_height = document.querySelector(".navbar").offsetHeight;

document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener("scroll", function () {
    if (window.scrollY > screen_height - navbar_height) {
      document.getElementById("navbar_top").classList.add("fixed-top");
      // add padding top to show content behind navbar
      document.body.style.paddingTop = navbar_height + "px";
    } else {
      document.getElementById("navbar_top").classList.remove("fixed-top");
      // remove padding top from body
      document.body.style.paddingTop = "0";
    }
  });
});

// Wait for window load
$(window).load(function () {
  setTimeout(function () {
    // Animate loader off screen
    $(".loading-screen").fadeOut("slow");
  }, "fast");
});
