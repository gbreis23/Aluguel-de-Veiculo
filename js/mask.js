// inicio mascara cpf cadastro

const cpfcadastro = document.getElementById("cpfcadastro");

cpfcadastro.addEventListener("keyup", formatarCPF);

function formatarCPF(e) {

    var v = e.target.value.replace(/\D/g, "");

    v = v.replace(/(\d{3})(\d)/, "$1.$2");

    v = v.replace(/(\d{3})(\d)/, "$1.$2");

    v = v.replace(/(\d{3})(\d{1,2})$/, "$1-$2");

    e.target.value = v;

}

// fim mascara cpf cadastro


// inicio mascara telefone 

const telcadastro = document.getElementById("telcadastro");

telcadastro.addEventListener("keyup", formatarTelefone);

function formatarTelefone(e){

var v=e.target.value.replace(/\D/g,"");

v=v.replace(/^(\d\d)(\d)/g,"($1)$2"); 

v=v.replace(/(\d{5})(\d)/,"$1-$2");    

e.target.value = v;
}

// fim mascara telefone 


// inicio mascara cep 

const cepviagem = document.getElementById("partida");

cepviagem.addEventListener("keyup", formatarCep);

function formatarCep(e){

var v= e.target.value.replace(/\D/g,"")                

v=v.replace(/^(\d{5})(\d)/,"$1-$2") 

e.target.value = v;

}

// fim mascara cep 