import {scrollBaixo, scrollCima} from "./pageroll.js";

const corpo = document.body;
corpo.style.overflow = "hidden";

const projectButton = document.querySelector("#projects");
const contactButton = document.querySelector("#contact");
const learnButton = document.querySelector("#learn");

projectButton.addEventListener("click", ()=>{
    document.documentElement.scrollTop = window.innerHeight;
})

contactButton.addEventListener("click", ()=>{
    document.documentElement.scrollTop = (window.innerHeight)*2;
})

learnButton.addEventListener("click", ()=>{
    document.documentElement.scrollTop = (window.innerHeight)*2;
})

function scroll(event){
    if(event.deltaY < 0){
        scrollCima()
    }else if(event.deltaY > 0){
        scrollBaixo()
    }
}

setInterval(corpo.addEventListener("wheel", scroll), 5)