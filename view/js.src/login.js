let tokenSessao = '';

// Função para iniciar a sessão
function startSession() {
  return new Promise((resolve, reject) => {
    $.ajax({
      type: "GET",
      url: "/juana/model/session.php",
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
      url: "/juana/model/session.php",
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
      url: "/juana/model/login.php",
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

$(".login").on("click", function () {
  console.warn("Entrou aqui");
  startSession()
    .then(() => generateToken())
    .then(() => {
      const dataToSend = {
        token: tokenSessao.token,
        username: document.getElementById("username").value,
        password: document.getElementById("password").value
      };
      sendData(dataToSend).then((response) => {
        console.warn(response);
        if (response.sucesso) {
          console.log('Sucesso:', response.mensagem);
          window.location.href = '../index.html';
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
