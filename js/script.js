const setas = document.querySelectorAll(".seta");

setas.forEach((seta) => {

  seta.addEventListener("click", () => {

    const item = seta.closest(".items");
    const texto = item.querySelector(".mostrarTexto");

    texto.classList.toggle("ativo");
    
  });

});