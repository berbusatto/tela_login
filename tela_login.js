function validar(){
    validaNome();
    validaTelefone();
    validaEmail();
    validaInteresses();

    if (validaNome(nome) && validaTelefone(telefone) && validaEmail(email) && validaInteresses(formulario)) { 
        alert("Cadastro efetuado com sucesso.");
    }
}

function validaNome(){
    var nome = document.getElementById("nome");
    if (nome.value == "" || !isNaN(nome.value)){
        alert("Preencha o nome corretamente.");
        return false;
    } else{
        return true;
    }
}

function validaTelefone(){
    var telefone = document.getElementById("telefone");
    if (telefone.value == "" || isNaN(telefone.value) || telefone.value.length != 11 ){
        alert("Preencha o telefone corretamente.");
        return false;
    } else{
        return true;
    }
}

function validaEmail(){
    var email = document.getElementById("email");
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email.value)){
        return (true);
    } else{        
        alert("Preencha o e-mail corretamente.")
        return (false);
    }
}

function validaInteresses() { 
    if (formulario.web.checked || formulario.mob.checked || formulario.db.checked) { 
        return true;
    } else { 
        alert("Preencha ao menos um interesse."); 
        return false;
    } 
}



    

    

