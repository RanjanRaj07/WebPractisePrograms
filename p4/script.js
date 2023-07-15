const txt = document.getElementById('ip-txt')
const res = document.getElementById('res')

function runJS(){
    const value = txt.value
    if(Number.isInteger(parseInt(value))){
        var num = parseInt(value)
        var rev = 0,rem =0
        while(num>0){
            rem=parseInt(num%10)
            rev = rev*10+rem
            num=parseInt(num/10)
        }
        res.innerHTML = `<h1 style="color:red;">Result</h1><h4>Reverse of ${value} is ${rev}</h4>`
        txt.value = ''
    }
    else{
        var text = `<h1 style="color:red;">Result</h1><h4>The text entered is ${value}</h4>`
        for(var i=0;i<value.length;i++){
            if(value.charAt(i)=='a' || value.charAt(i)=='e' || value.charAt(i)=='i' || value.charAt(i)=='o' || value.charAt(i)=='u'
            || value.charAt(i)=='A' || value.charAt(i)=='E' || value.charAt(i)=='I' || value.charAt(i)=='O' || value.charAt(i)=='U'){
                text += `<h4>The Leftmost vowel is : ${value.charAt(i)}</h4>`
                text += `<h4>The position of ${value.charAt(i)} is : ${i+1}`
                res.innerHTML = text
                txt.value = ''
                return
            }
        }
        text += `<h4>The given text has no vowels</h4>`
        res.innerHTML=text
        txt.value = ''
    }
}