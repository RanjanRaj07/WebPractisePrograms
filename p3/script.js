const txt = document.getElementById("txt")

txt.style.color='red'
txt.style.fontSize ='10px'
txt.textContent = 'TEXT-GROWING'

let fontSize = 10
let growing = true

animateText=()=>{
    txt.style.fontSize = fontSize+'pt'
    txt.style.color = growing ? 'red' : 'blue'

    if(growing){
        fontSize++;
        if(fontSize>=50){
            growing=false
            txt.textContent = 'TEXT-SHRINKING'
        }
    }else{
        fontSize--;
        if(fontSize<=5){
            clearInterval(interid)
        }
    }
}

const interid = setInterval(animateText, 100)