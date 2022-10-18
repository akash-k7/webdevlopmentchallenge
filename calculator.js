function btnClick(val){
    console.log(val)
    document.getElementById("screen1").value+=val
}

function clearScreen(){
    document.getElementById("screen1").value=""
}

function equalClick(){
    var text = document.getElementById("screen1").value
    var result= eval(text)
    document.getElementById("screen1").value=result
}
