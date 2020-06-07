
function cadastro(){

    let nome = document.querySelector('input#nome1')
    let email = document.querySelector('input#email1')
    let tel = document.querySelector('input#tel1')
    let senha = document.querySelector('input#senha')
    let endereco = document.querySelector('input#endereco')
    let res = document.querySelector('div#res')

    if(nome.value.length == 0||email.value.length ==0||tel.value.length ==0||senha.value.length ==0||senha1.value.length ==0||endereco.value.length==0){
       res.innerHTML = 'Voce precisa preencher todos os campos!'

    }
    else{
        alert('Cadastro efetuado com sucesso!')
        }

}
