/*
    Custom script for akmalzamel.xyz
 */

// particlesJS.load(@dom-id, @path-json, @callback (optional));
// particlesJS.load('particles-js', '../assets/particles.json', function () {
//     console.log('callback - particles.js config loaded');
// });

class TypeWriter {
  constructor(txtElement, str, wait = 3000) {
    this.txtElement = txtElement;
    this.str = str;
    this.txt = "";
    this.strIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.isDeleting = false;
  }

  type() {
    const i = this.strIndex % this.str.length;
    const fullTxt = this.str[i];

    if (this.isDeleting) {
      this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
      this.txt = fullTxt.substring(0, this.txt.length + 1);
    }

    let typeSpeed = 100;
    if (this.isDeleting) {
      typeSpeed /= 2;
    }

    this.txtElement.innerHTML = `<span class="txt">${this.txt}</span>`;

    if (!this.isDeleting && this.txt === fullTxt) {
      typeSpeed = this.wait;
      this.isDeleting = true;
    } else if (this.isDeleting && this.txt === "") {
      typeSpeed = 500;
      this.isDeleting = false;
      this.strIndex++;
    }

    setTimeout(() => this.type(), typeSpeed);
  }
}

function init() {
  // Init Bootstrap tooltip
  var tooltipTriggerList = [].slice.call(
    document.querySelectorAll('[data-bs-toggle="tooltip"]')
  );
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl);
  });

  //Init navbar
  var screen_height = screen.height;
  var navbar_height = document.querySelector(".navbar").offsetHeight;

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

  //Init typewriter
  const txtElement = document.querySelector(".txt-type");
  const str = JSON.parse(txtElement.getAttribute("data-str"));
  const wait = txtElement.getAttribute("data-wait");
  new TypeWriter(txtElement, str, wait);

  // GitHubActivity
  GitHubActivity.feed({
    username: "kemey42",
    repository: "", // optional
    selector: "#github-feed",
    limit: 20, // optional
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
