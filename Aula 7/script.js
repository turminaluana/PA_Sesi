function exibirNome(){
    let nome = document.querySelector('#nome').value
    alert(nome)
}

function somar(){
    let valA = Number(document.querySelector('#valorA').value)
    let valB = Number(document.querySelector('#valorB').value)
    alert(valA + valB)
}

function subtrair(){
    let valA = Number(document.querySelector('#valorA').value)
    let valB = Number(document.querySelector('#valorB').value)
    alert(valA - valB)
}

function multiplicar(){
    let valA = Number(document.querySelector('#valorA').value)
    let valB = Number(document.querySelector('#valorB').value)
    alert(valA * valB)
}

function dividir(){
    let valA = document.querySelector('#valorA')
    let valB = document.querySelector('#valorB')
    let num1 = Number(valA.value)
    let num2 = Number(valB.value)
    if(num1 == 0 || num2 == 0){
        alert("Voce é gay")
    }
    else{
        alert(num1 / num2)
    }
    valA.value = ""
    valB.value = ""
}

