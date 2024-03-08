// menu Toggle
const hamBurguer = document.querySelectorAll(".toggle-btn");

hamBurguer.forEach(function(botao) {
    botao.addEventListener("click", function() {
        document.querySelector("#sidebar").classList.toggle("expand");
    });
});