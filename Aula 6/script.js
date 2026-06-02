console.log(5+5)
console.log(5+"5")

let aluno = "Davi"
var  aluno_var = "Lucas"
const nome = "Pietro"  //não muda

console.log("O " + nome + " é aluno do sesi")

let frutas = ["Maçã", "Uva", "Pêra"]

console.log(frutas, frutas.length)

let alunos = [
    {
        id: 1,
        nome: "murilo",
        sobrenome: "chaves"
    },
    {
        id: 2,
        nome:"vinicius",
        sobrenome: "lima"
    },
    {
        id: 3,
        nome: "Davi",
        sobrenome: "Ferrari"
    }   
]

console.log(alunos[2].nome)


function soma(n1, n2){
    return n1 + n2
}

console.log(soma(10,20))
console.log(soma(50,30))