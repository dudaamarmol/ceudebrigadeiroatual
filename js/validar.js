function Email() 
{
    expressao = /^.*@.*.com$/g;
    texto = email.value
    resposta = expressao.test(texto);
    
    if (resposta == false) 
    {
        email.classList.remove('certo');
        email.classList.add('errado'); 
    }
    if (resposta == true) 
    {
        email.classList.remove('errado');
        email.classList.add('certo');
    }

    expressao = /^.*@.*.com$/g;
    texto = email2.value
    resposta = expressao.test(texto);
    
    if (resposta == false) 
    {
        email2.classList.remove('certo');
        email2.classList.add('errado'); 
    }
    if (resposta == true) 
    {
        email2.classList.remove('errado');
        email2.classList.add('certo');
    }
}

function Senha(){
    if (senha.value==senha2.value){
        senha2.classList.remove('errado');
        senha2.classList.add('certo');
    }else{
        senha2.classList.remove('certo');
        senha2.classList.add('errado');
    }


}