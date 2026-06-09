let mensagem = document.querySelector('#mensagem')

function exibir() {
    let nome = document.querySelector('#nome').value
    let sobrenome = document.querySelector('#sobrenome').value
    let idade = document.querySelector('#idade').value
    let profissao = document.querySelector('#profissao').value

    if (!nome || !sobrenome || !idade || !profissao) {
        alert("Preencha todos os campos");
        return;
    }

    mensagem.innerHTML = ` ${nome} ${sobrenome}, você tem ${idade} anos e trabalha como ${profissao}`
}