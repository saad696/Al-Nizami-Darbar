const imagenes = document.querySelectorAll(".img-galeria");
const imagenesLight = document.querySelector(".agregar-imagen");
const contenedorLight = document.querySelector(".imagen-light");

imagenes.forEach((imagen) => {
  imagen.addEventListener("click", () => {
    aparecerImagen(imagen.getAttribute("src"));
  });
});

contenedorLight.addEventListener("click", (e) => {
  if (e.target !== imagenesLight) {
    contenedorLight.classList.remove("show");
    imagenesLight.classList.remove("showImage");
  }
});

const aparecerImagen = (imagen) => {
  imagenesLight.src = imagen;
  contenedorLight.classList.add("show");
  imagenesLight.classList.add("showImage");
};

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
  
