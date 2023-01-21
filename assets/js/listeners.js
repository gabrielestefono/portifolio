import {scrollBaixo, scrollCima} from "./pageroll.js";

const corpo = document.body;
corpo.style.overflow = "hidden";

const projectButton = document.querySelector("#projects");
const contactButton = document.querySelector("#contact");
const learnButton = document.querySelector("#learn");
const floatingHomeButton = document.querySelector("#floating__home-btn");
const floatingProjectButton = document.querySelector("#floating__projects-btn");
const floatingContactButton = document.querySelector("#floating__contact-btn");

projectButton.addEventListener("click", ()=>{
    document.documentElement.scrollTop = window.innerHeight;
})

contactButton.addEventListener("click", ()=>{
    document.documentElement.scrollTop = (window.innerHeight)*2;
})

learnButton.addEventListener("click", ()=>{
    document.documentElement.scrollTop = (window.innerHeight)*2;
})

floatingHomeButton.addEventListener("click", ()=>{
    document.documentElement.scrollTop = 0;
})

floatingProjectButton.addEventListener("click", ()=>{
    document.documentElement.scrollTop = window.innerHeight;
})

floatingContactButton.addEventListener("click", ()=>{
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