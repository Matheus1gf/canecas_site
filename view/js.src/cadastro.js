let tokenSessao = '';

// Função para iniciar a sessão
function startSession() {
  return new Promise((resolve, reject) => {
    $.ajax({
      type: "GET",
      url: "/game/model/session.php",
      data: { conexao: 'start' },
      success: function (response) {
        console.warn('Success start session - ', response);
        resolve();
      },
      error: function (error) {
        reject(error);
      }
    });
  });
}

// Função para gerar o token
function generateToken() {
  return new Promise((resolve, reject) => {
    $.ajax({
      type: "GET",
      url: "/game/model/session.php",
      data: { conexao: 'gera_token' },
      success: function (response) {
        tokenGerado = JSON.parse(response);
        tokenSessao = { token: tokenGerado.message };
        console.warn('Success gera token - ', tokenGerado.message);
        resolve();
      },
      error: function (error) {
        reject(error);
      }
    });
  });
}

// Função para enviar dados
function sendData(dataToSend) {
  return new Promise((resolve, reject) => {
    $.ajax({
      type: "POST",
      url: "/game/model/cadastro.php",
      data: JSON.stringify(dataToSend),
      contentType: "application/json",
      success: function (response) {
        console.warn('Success envia token - ', response);
        resolve();
      },
      error: function (error) {
        reject(error);
      }
    });
  });
}

$(".cadastrar_button").on("click", function () {
  console.warn("Entrou aqui");
  startSession()
    .then(() => generateToken())
    .then(() => {
      const dataToSend = {
        token: tokenSessao.token,
        nome_completo: document.getElementById("nome_completo").value,
        cpf: document.getElementById("cpf").value,
        email: document.getElementById("email").value,
        data_nascimento: document.getElementById("data_nascimento").value,
        sexo: document.getElementById("sexoM").checked ? "M" : document.getElementById("sexoF").checked ? "F" : "O",
        cidade: document.getElementById("cidade").value,
        estado: document.getElementById("estado").value,
        bairro: document.getElementById("bairro").value,
        rua: document.getElementById("rua").value,
        numero: document.getElementById("numero").value,
        complemento: document.getElementById("complemento").value,
        rg: document.getElementById("rg").value,
        senha: document.getElementById("senha").value,
        foto: document.getElementById("foto").value,
        conta_bancaria: document.getElementById("conta_bancaria").value,
        banco: document.getElementById("banco").value,
        agencia: document.getElementById("agencia").value,
        pix: document.getElementById("pix").value
      };
      sendData(dataToSend).then((response) => {
        console.warn(response);
        if (response.sucesso) {
          console.log('Sucesso:', response.mensagem);
          window.location.href = '../login.html';
        }else {
          console.error('Erro:', response.mensagem);
        }
      })
      .catch((error) => {
        console.error('Erro:', error);
      });
    })
    .catch((error) => {
      console.error('Erro:', error);
    });
});
