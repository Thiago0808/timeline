const cor = document.getElementById("textos")
const p = document.querySelector("*")

cor.addEventListener("change", function(){
    console.log(cor.value)
    p.style.color = cor.value;
})

// Desafio de Códifgo. Muda a cor dos textos do site ao selecionar uma cor