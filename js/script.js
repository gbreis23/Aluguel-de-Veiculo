function carrao(){
    car = document.getElementById('valcar')
    modi = `<div class="car-viagem">

    <p class="p-4"></p>
    <i style="font-size: 30px; margin-left: 95%; cursor:pointer;" onclick="fechar()" class="fa-solid fa-xmark"></i>
    <p class="p-2"></p>
    <div class="row">
        <div class="col text-start"><img src="imagens/car.png"  alt=""></div>
        <div class="col text-start">
            <p class="p-3"></p>
            <h2>Padrão</h2>
            <span>R$150<sub>57</sub></span>
        </div>
    </div>
    <div class="row">
        <div class="col text-start"><img src="imagens/car.png"  alt=""></div>
        <div class="col text-start">
            <p class="p-3"></p>
            <h2>Bebê Conforto</h2>
            <span>R$110<sub>69</sub></span>
        </div>
    </div>
    <div class="row">
        <div class="col text-start"><img src="imagens/car.png"  alt=""></div>
        <div class="col text-start">
            <p class="p-3"></p>
            <h2>Premium</h2>
            <span>R$00<sub>25</sub></span>
        </div>
    </div>
</div>`

car.innerHTML = modi
}

function fechar(){
    var car = document.getElementById('valcar')
    car.innerHTML = ""
}


// inicio login

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () => {
    loginForm.classList.toggle('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
    loginForm.classList.remove('active');
}

window.onscroll = () => {
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

// fim login 


// inicio api cep

function limpa_formulário_cep() {

    document.getElementById('partida').value = ("");
}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {

        var endereco = conteudo.logradouro + ", " + conteudo.bairro + ", " + conteudo.localidade + " - " + conteudo.uf;
        document.getElementById('partida').value = (endereco);
    }
    else {
        limpa_formulário_cep();
        var input = document.getElementById ("partida");
        input.placeholder = "CEP INVÁLIDO!";
    }
}

function pesquisacep(valor) {

    var cep = valor.replace(/\D/g, '');

    if (cep != "") {

        var validacep = /^[0-9]{8}$/;

        if (validacep.test(cep)) {


            document.getElementById('partida').value = "...";

            var script = document.createElement('script');

            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            document.body.appendChild(script);

        } 
        else {
            limpa_formulário_cep();
            var input = document.getElementById ("partida");
            input.placeholder = "CEP INVÁLIDO!";
        }
    } 
    else {
        limpa_formulário_cep();
    }
};

// fim api cep


// inicio simulação de login 

function login() {
    var icon = document.getElementById('login-btn')
    var span = document.getElementById('span-icon')
    var user = document.getElementById('user')
    var form = document.getElementById('form')
    icon.style.display = "none"
    span.innerHTML = user.value
    form.style.display = "none"

}

// fim simulação login 



// inicio somente numeros cadastro

const tel = document.getElementById("telcadastro");
const cpf = document.getElementById("cpfcadastro");

tel.addEventListener("keypress", somenteNumeros);
cpf.addEventListener("keypress", somenteNumeros);

function somenteNumeros(e) {

    var charCode = (e.which) ? e.which : e.keyCode

    if (charCode > 31 && (charCode < 48 || charCode > 57))

        e.preventDefault();

}

// fim somente numeros cadastro


//obrigar preencher

$(function preencher(){
    $('input').on('focusout',function preencher(){
      if(this.value === ''){
        $(this).css('border','1px solid red');
      }else{
        $(this).css('border','');
      }
    });
    
    $('input[type=button]').click(function preencher(){
      $('input').each(function preencher(){
        if(this.value === ''){
          alert('Campo vazio.');
          $(this).css('border','1px solid red');
          return false;
        }
      });
    });
  })

