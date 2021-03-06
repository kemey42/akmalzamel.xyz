/*
    Custom script for akmalzamel.xyz
 */

function init() {
  // Init Bootstrap tooltip
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });
}

$(document).ready(function () {
  // executes when HTML-Document is loaded and DOM is ready
  init();
});

$(window).load(function () {
  // executes when complete page is fully loaded, including all frames, objects and images
  $(".loading-screen").fadeOut(1000);
});
