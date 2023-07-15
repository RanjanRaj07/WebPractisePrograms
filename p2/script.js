let numbers = [];
let squares = [];
let cubes = [];

for (let i=0;i<=10;i++){
    numbers.push(i)
    squares.push(i*i)
    cubes.push(i*i*i)
}

let tableHTML = `<tr><th>Number</th><th>Squares</th><th>Cubes</th></tr>`

document.getElementById("tab").innerHTML=tableHTML
let i=0;
const intervalId = setInterval(()=>{
    tableHTML += `<tr><td>${numbers[i]}</td><td>${squares[i]}<td>${cubes[i]}</td></td></tr>`
    printtab()
    i++
},1000)

function printtab(){
    document.getElementById("tab").innerHTML=tableHTML
    if(i==10)
        clearInterval(intervalId)
}