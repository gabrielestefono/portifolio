const homePage = document.querySelector(".first-section")
const projects = document.querySelector(".second-section")
const contact = document.querySelector(".third-section")


let scrollCima = function(){
    let scrollnow = document.documentElement.scrollTop
    if(scrollnow == window.innerHeight){
        document.documentElement.scrollTop = 0;
    }else if(scrollnow == (window.innerHeight)*2){
        document.documentElement.scrollTop = window.innerHeight;
    }
}

let scrollBaixo = function (){
    let scrollnow = document.documentElement.scrollTop
    if(scrollnow == 0){
        document.documentElement.scrollTop = window.innerHeight;
    }else if(scrollnow == window.innerHeight){
        document.documentElement.scrollTop = (window.innerHeight)*2;
    }
}

export {scrollBaixo, scrollCima};