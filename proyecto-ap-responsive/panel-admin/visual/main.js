let list=document.querySelectorAll(".navegacion li");
function linkactivo(){
    list.forEach(item=>{
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}
list.forEach(item=>item.addEventListener("mouseover",linkactivo));

document.addEventListener("DOMContentLoaded", function() {
    let ocultar = document.querySelector(".ocultar");
    let navegacion = document.querySelector(".navegacion");
    let main = document.querySelector(".main");

    ocultar.addEventListener("click", function() {
        navegacion.classList.toggle("active");
        main.classList.toggle("active");
    });
});
