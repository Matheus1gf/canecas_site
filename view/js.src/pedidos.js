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