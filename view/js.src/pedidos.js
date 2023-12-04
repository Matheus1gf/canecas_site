
// Função para iniciar a sessão
function startSession() {
  return new Promise((resolve, reject) => {
    $.ajax({
      type: "GET",
      url: "/juana_new/model/session.php",
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
      url: "/juana_new/model/session.php",
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
      url: "/juana_new/model/pedidos.php",
      data: JSON.stringify(dataToSend),
      contentType: "application/json",
      success: function (response) {
        console.warn('Success envio - ', response);
        resolve(response);
      },
      error: function (error) {
        reject(error);
      }
    });
  });
}

$(".enviar_pedido").on("click", function () {
  startSession()
    .then(() => generateToken())
    .then(() => {
      const dataToSend = {
        token: tokenSessao.token,
        nome_completo: document.getElementById("nome_completo").value,
        celular: document.getElementById("celular").value,
        email: document.getElementById("email").value,
        cidade: document.getElementById("cidade").value,
        estado: document.getElementById("estado").value,
        bairro: document.getElementById("bairro").value,
        foto: document.getElementById("formFile").value,
        selectItem: document.getElementById("selectItem").value,
        selectCanecas: document.getElementById("selectCanecas").value,
        selectChinelos: document.getElementById("selectChinelos").value,
        selectCamisas: document.getElementById("selectCamisas").value,
        selectBolsas: document.getElementById("selectBolsas").value,
        selectOutros: document.getElementById("selectOutros").value,
        observacao: document.getElementById("observacao").value
      };
      sendData(dataToSend).then((response) => {
        const retorno = JSON.parse(response);
        console.warn(retorno);
        if (retorno.sucesso) {
          console.log('Sucesso:', response.mensagem);
          window.location.href = '../view/pedidos.html';
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

document.addEventListener("DOMContentLoaded", function () {
    // Pega o elemento do select principal
    var selectItem = document.getElementById("selectItem");

    // Pega os elementos dos selects relacionados
    var selectCanecas = document.getElementById("selectCanecas");
    var selectChinelos = document.getElementById("selectChinelos");
    var selectCamisas = document.getElementById("selectCamisas");
    var selectBolsas = document.getElementById("selectBolsas");
    var selectOutros = document.getElementById("selectOutros");

    // Adiciona um ouvinte de evento para o evento de mudança no select principal
    selectItem.addEventListener("change", function () {
        // Oculta todos os selects relacionados
        selectCanecas.style.display = "none";
        selectChinelos.style.display = "none";
        selectCamisas.style.display = "none";
        selectBolsas.style.display = "none";
        selectOutros.style.display = "none";

        // Mostra o select relacionado à opção selecionada
        var selectedOption = selectItem.options[selectItem.selectedIndex].value;
        if (selectedOption === "1") {
            selectCanecas.style.display = "block";
        } else if (selectedOption === "2") {
            selectChinelos.style.display = "block";
        } else if (selectedOption === "3") {
            selectCamisas.style.display = "block";
        } else if (selectedOption === "4") {
            selectBolsas.style.display = "block";
        } else if (selectedOption === "5") {
            selectOutros.style.display = "block";
        }
    });
});