let sliderElement = document.querySelector("#slider");
let buttonElement = document.querySelector("#button");

let sizePassword = document.querySelector("#valor");
let password = document.querySelector("#password");

let containerPassword = document.querySelector("#container-password");

let charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVNXYZƏ123456789';
let charset_especial = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVNXYZƏ123456789!@#$%^&*-_'
let novaSenha = "";


let carc_especial = false //variável que defina se haverá ou não caracteres especiais



sizePassword.innerHTML = sliderElement.value;

slider.oninput = function() {
    sizePassword.innerHTML = this.value;
}

function generatePassword(){
    let pass = '';

    if (carc_especial=== false){ // se não for requisitado o caractere especial não será pego os caracteres da lista que possúi caracteres especias
        for(let i = 0, n = charset.length; i < sliderElement.value; ++i){
           pass += charset.charAt(Math.floor(Math.random() * n))
           }

    }else { // caso a pessoa esteja com a checkbox selecioanda será pego uma senha com caracteres especiais
        for(let i = 0, n = charset_especial.length; i < sliderElement.value; ++i){
            pass += charset_especial.charAt(Math.floor(Math.random() * n))
        
    }
}

    containerPassword.classList.remove('hide');
    password.innerHTML = pass;
    novaSenha = pass
}

function copyPassword(){
    navigator.clipboard.writeText(novaSenha);
}


function Especial(){
    carc_especial = !carc_especial;
}