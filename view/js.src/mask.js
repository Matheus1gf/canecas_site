$(document).ready(function () {
    $('#cpf').inputmask("999.999.999-99");
});

$(document).ready(function() {
    $('#numero').inputmask('99999999', {
      placeholder: '',
      clearMaskOnLostFocus: false
    });
  });