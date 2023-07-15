let op = document.getElementById("optext")

op.value = "0"

let check = 0

function display(val){
    if(check==1){
        op.value = ""
    }
    if(op.value[0]!=0){
    op.value += val
    check=0
    }
    else{
        op.value=""
        op.value += val
        check=0
    }
}

function calculate(){
    try{
        op.value = eval(op.value)
        check=1
    }
    catch{
        alert("Invalid input")
        check=1
    }
}

function Clear(){
    op.value = "0"
}

function del() {
    op.value = op.value.slice(0,-1)
}