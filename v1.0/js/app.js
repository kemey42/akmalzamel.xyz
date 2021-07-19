/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
particlesJS.load('particles-js', '../assets/particles.json', function () {
    console.log('callback - particles.js config loaded');
});

GitHubActivity.feed({
    username: "kemey42",
    repository: "", // optional
    selector: "#feed",
    limit: 5, // optional
});