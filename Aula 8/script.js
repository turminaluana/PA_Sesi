let form = document.querySelector('#formulario')

form.addEventListener('submit', (e) => {
    e.preventDefault()
    let nome = document.querySelector('#nome').value
    let sobrenome = document.querySelector('#sobrenome').value
    let idade = document.querySelector('#idade').value
    let profissao = document.querySelector('#profissao').value

    if (!nome || !sobrenome || !idade || !profissao) {
        alert("Preencha todos os campos");
        return;
    }

    let resposta = document.querySelector('#resposta')

    resposta.innerHTML = `Bem vindo ${nome} ${sobrenome}, você tem ${idade} anos e trabalha como ${profissao}`

})