console.log('cargando busqueda');

document.addEventListener("DOMContentLoaded", function () {
    // Seleccionar el botón de lupa y la capa de búsqueda
    const lupaButton = document.querySelector(".lupa-button");
    const overlay = document.querySelector(".overlay");
    const searchClose = document.querySelector(".search-close");

    // Función para abrir la barra de búsqueda
    lupaButton.addEventListener("click", function () {
        overlay.style.display = "flex"; // Mostrar la capa gris y barra de búsqueda
    });

    // Función para cerrar la barra de búsqueda
    searchClose.addEventListener("click", function () {
        overlay.style.display = "none"; // Ocultar la capa y la barra de búsqueda
    });

    // Cerrar la búsqueda si se hace clic fuera del contenedor de búsqueda
    overlay.addEventListener("click", function (event) {
        if (event.target === overlay) {
            overlay.style.display = "none"; // Ocultar la capa y barra de búsqueda
        }
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      loop: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 150,
        modifier: 2.5,
        slideShadows: true,
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  });


  