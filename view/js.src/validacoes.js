function valida_string(string) {
    if (typeof string === 'string' && string.length > 0) {
        return true;
    }
    return false;
}

function valida_cpf(cpf) {
    if (!valida_string(document.getElementById("cpf"))) {
        return false;
    }

    cpf = cpf.replace(/[^0-9]/g, '');

    if (cpf.length !== 11) {
        return false;
    }

    if (/(.)\1{10}/.test(cpf)) {
        return false;
    }

    let soma = 0;
    for (let i = 0; i < 9; i++) {
        soma += parseInt(cpf[i]) * (10 - i);
    }
    let resto = soma % 11;
    let dv1 = (resto < 2) ? 0 : 11 - resto;

    if (parseInt(cpf[9]) !== dv1) {
        return false;
    }

    soma = 0;
    for (let i = 0; i < 10; i++) {
        soma += parseInt(cpf[i]) * (11 - i);
    }
    resto = soma % 11;
    let dv2 = (resto < 2) ? 0 : 11 - resto;

    return parseInt(cpf[10]) === dv2;
}

if(window.location.href.endsWith("cadastro.html")){
    $(".cadastrar_button").on("click", function () {
        // Campos do cadastro
        let nome_completo = valida_string(document.getElementById("nome_completo"));
        let email = /^\S+@\S+\.\S+$/.test(document.getElementById("email"));
        let cidade = valida_string(document.getElementById("cidade"));
        let estado = valida_string(document.getElementById("estado"));
        let bairro = valida_string(document.getElementById("bairro"));
        let msg = "";

        if (!nome_completo) {
            msg += "Dado 'Nome Completo' inválido\n";
        }
        if (!email) {
            msg += "Dado 'E-mail' inválido\n";
        }
        if (!cidade) {
            msg += "Dado 'Cidade' inválido\n";
        }
        if (!estado) {
            msg += "Dado 'Estado' inválido\n";
        }
        if (!bairro) {
            msg += "Dado 'Bairro' inválido\n";
        }
        if(msg !== ""){
            alert(msg);
        }
    });
}