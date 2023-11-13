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

function valida_foto(foto) {
    if (!valida_string(document.getElementById("foto"))) {
        return false;
    }

    if (foto > 1024 * 1024) {
        return false;
    }

    const extensoes_permitidas = ['jpg', 'jpeg', 'png', 'gif'];
    const extensao = foto.split('.').pop().toLowerCase();
    if (!extensoes_permitidas.includes(extensao)) {
        return false;
    }

    return true;
}

if(window.location.href.endsWith("cadastro.html")){
    $(".cadastrar_button").on("click", function () {
        // Campos do cadastro
        let nome_completo = valida_string(document.getElementById("nome_completo"));
        let cpf = valida_cpf(document.getElementById("cpf"));
        let email = /^\S+@\S+\.\S+$/.test(document.getElementById("email"));
        let data_nascimento = valida_string(document.getElementById("data_nascimento"));
        let sexo = valida_string(document.getElementById("sexo")) && (sexo === "M" || sexo === "F" || sexo === "O");
        let cidade = valida_string(document.getElementById("cidade"));
        let estado = valida_string(document.getElementById("estado"));
        let bairro = valida_string(document.getElementById("bairro"));
        let rua = valida_string(document.getElementById("rua"));
        let numero = Number.isInteger(parseInt(document.getElementById("numero"))) && parseInt(document.getElementById("numero")) >= 0;
        let complemento = valida_string(document.getElementById("complemento"));
        let rg = Number.isInteger(parseInt(document.getElementById("rg"))) && parseInt(document.getElementById("rg")) >= 0;
        let senha = valida_string(document.getElementById("senha"));
        let foto = true; // valida_foto(foto);
        let conta_bancaria = valida_string(document.getElementById("conta_bancaria"));
        let banco = valida_string(document.getElementById("banco"));
        let agencia = valida_string(document.getElementById("agencia"));
        let pix = valida_string(document.getElementById("pix"));
        let msg = "";

        if (!nome_completo) {
            msg += "Dado 'Nome Completo' inválido\n";
        }
        if (!cpf) {
            msg += "Dado 'CPF' inválido\n";
        }
        if (!email) {
            msg += "Dado 'E-mail' inválido\n";
        }
        if (!data_nascimento) {
            msg += "Dado 'Data de Nascimento' inválido\n";
        }
        if (!sexo) {
            msg += "Dado 'Sexo' inválido\n";
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
        if (!rua) {
            msg += "Dado 'Rua' inválido\n";
        }
        if (!numero) {
            msg += "Dado 'Número' inválido\n";
        }
        if (!complemento) {
            msg += "Dado 'Complemento' inválido\n";
        }
        if (!rg) {
            msg += "Dado 'RG' inválido\n";
        }
        if (!senha) {
            msg += "Dado 'Senha' inválido\n";
        }
        if (!foto) {
            msg += "Dado 'Foto' inválido\n";
        }
        if (!conta_bancaria) {
            msg += "Dado 'Conta' inválido\n";
        }
        if (!banco) {
            msg += "Dado 'Banco' inválido\n";
        }
        if (!agencia) {
            msg += "Dado 'Agência' inválido\n";
        }
        if (!pix) {
            msg += "Dado 'Pix' inválido\n";
        }
        if(msg !== ""){
            alert(msg);
        }
    });
}