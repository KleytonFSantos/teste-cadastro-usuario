function cadastrar(){
    if(validPassword == true){
        alert('Cadastro realizado com sucesso')

    }
    else{
        alert('Erro encontrado, tente novamente!')

    }
}

let name = document.querySelector('#nome')
let validname = false

let email = document.querySelector('#Email')
let validEmail = false

let password = document.querySelector('#password')
let validPassword = false

password.addEventListener('keyup',() =>{
    if(password.value.lenght <= 7){
        validPassword = false
        alert('Sua senha precisa de no mínimo 8 caracteres')
    }
    else{
        validPassword = true
    }


})