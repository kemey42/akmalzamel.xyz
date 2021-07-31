/*
    Custom script for akmalzamel.xyz
 */

// particlesJS.load(@dom-id, @path-json, @callback (optional));
particlesJS.load('particles-js', '../assets/particles.json', function () {
    console.log('callback - particles.js config loaded');
});

// GitHubActivity
GitHubActivity.feed({
    username: "kemey42",
    repository: "", // optional
    selector: "#github-feed",
    limit: 20, // optional
});

// Bootstrap tooltip
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
})

// Wait for window load
$(window).load(function () {
    setTimeout(function () {
        // Animate loader off screen
        $(".loading-screen").fadeOut("slow");;
    }, 1000);
});