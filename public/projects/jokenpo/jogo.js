// Jogadas
const user = document.getElementById("user");
const pc = document.getElementById("pc");
user.getAttribute("alt")
const site = document.querySelector("body")

//Opções
const pedra = document.getElementById("pedra");
const papel = document.getElementById("papel");
const tesoura = document.getElementById("tesoura");

// Resultado
const resultado = document.getElementById("resultado");
const pl = document.getElementById("placar");

// resultado.innerHTML++;

//const placar = document.querySelector(".placar")

let u = 0;
let p = 0;

// Function jogo (user){
//    let pc = sorteio();
//       switch(pc){
//        case 1:
//            jogadaPc.src = "images/pedra.png"
//            break;
//       case 2:
//            jogadaPc.src = "images/papel.png"
//            break;
//        case 3:
//            jogadaPc.src = "images/tesoura.png"
//            break;
//       }
//}

// Associar eventos às imgs
pedra.addEventListener("click", function(){
    user.src="img/pedra.jpg";
    c = Math.ceil(Math.random()*3);
    if (c==1){
        pc.src="img/pedra.jpg";
        resultado.innerHTML=("Empatou!")
        site.style.backgroundColor = "#ffff00"
    }
    else if (c==2){
        pc.src="img/papel.png";
        resultado.innerHTML=("Perdeu!");
        p++;
        site.style.backgroundColor = "#ff0000"
    }
    else{
        pc.src="img/tesoura.jpg";
        resultado.innerHTML=("Ganhou!");
        u++;
        site.style.backgroundColor = "#00ff00"
    }

    pl.innerHTML = ("USER "+u+"x"+p+" PC")

})
papel.addEventListener("click", function(){
    user.src="img/papel.png";
    c = Math.ceil(Math.random()*3);
    if (c==1){
        pc.src="img/pedra.jpg";
        resultado.innerHTML=("Ganhou!");
        u++;
        site.style.backgroundColor = "#00ff00"
    }
    else if (c==2){
        pc.src="img/papel.png";
        resultado.innerHTML=("Empatou!")
        site.style.backgroundColor = "#ffff00"
    }
    else{
        pc.src="img/tesoura.jpg";
        resultado.innerHTML=("Perdeu!");
        p++;
        site.style.backgroundColor = "#ff0000"
    }
    pl.innerHTML = ("USER "+u+"x"+p+" PC")
})
tesoura.addEventListener("click", function(){
    user.src="img/tesoura.jpg";
    c = Math.ceil(Math.random()*3);
    if (c==1){
        pc.src="img/pedra.jpg";
        resultado.innerHTML=("Perdeu!");
        p++;
        site.style.backgroundColor = "#ff0000"
    }
    else if (c==2){
        pc.src="img/papel.png";
        resultado.innerHTML=("Ganhou!");
        u++;
        site.style.backgroundColor = "#00ff00"
    }
    else{
        pc.src="img/tesoura.jpg";
        resultado.innerHTML=("Empatou!")
        site.style.backgroundColor = "#ffff00"
    }
    pl.innerHTML = ("USER "+u+"x"+p+" PC")

})



