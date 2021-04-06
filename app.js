$(document).ready(function () {
  var header = $("header"),
    btn = $("button.toggle-nav");

  btn.on("click", function () {
    header.toggleClass("active");
  });
});

$(".js-tilt").tilt({
  glare: true,
  maxGlare: 0.5,
});

const openNavBtn = document.getElementById("open");
const closeNavBtn = document.getElementById("close");

openNavBtn.addEventListener("click", () => {
  document.querySelector(".nav-list").style.display = "block";
  openNavBtn.style.display = "none";
  setTimeout(() => {
    document.querySelector("nav").classList.add("active");
  }, 1000);
});

closeNavBtn.addEventListener("click", () => {
  openNavBtn.style.display = "block";
  document.querySelector(".nav-list").style.display = "none";
  document.querySelector("nav").classList.remove("active");
});

new Typed("#typed", {
  strings: [
    "Exquisite cuisine.",
    "Eminent Interior.",
    "A feast for your senses.",
    "Royal enviroment",
  ],
  typeSpeed: 150,
  delaySpeed: 90,
  backSpeed: 130,
  loop: true,
  smartBackspace: true,
});

window.onload = function () {
  Particles.init({
    selector: ".background",
  });

  Particles.init({
    // normal options
    selector: ".background",
    color: "#ffa751",
    maxParticles: 450,
    // options for breakpoints
    responsive: [
      {
        breakpoint: 768,
        options: {
          maxParticles: 500,
          color: "#ffa751",
          connectParticles: false,
        },
      },
    ],
  });
};

