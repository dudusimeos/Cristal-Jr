
function valida() {
  if (nome.value == "" || email.value == "" || telefone.value == "" || mensagem.value == "") {
    alert("Preencha seus dados corretamente!");
    return false;
  } else {
    alert("Sua mensagem foi enviada com sucesso!");
    return true;
  }
}

// EBOOK ESQUERDA

function valida2() {
  if (nome1.value == "" || email1.value == "" || telefone1.value == "") {
    alert("Preencha seus dados corretamente!");
    return false;
  } else {
    window.location.href = "../download/planodeensino.pdf";
  }
}

// EBOOK MEIO

function valida3() {
  if (nome2.value == "" || email2.value == "" || telefone2.value == "") {
    alert("Preencha seus dados corretamente!");
    return false;
  } else {
    window.location.href = "../download/planodeensino.pdf";
  }
}

// EBOOK DIREITA

function valida4() {
  if (nome3.value == "" || email3.value == "" || telefone3.value == "") {
    alert("Preencha seus dados corretamente!");
    return false;
  } else {
    window.location.href = "../download/planodeensino.pdf";
  }
}

// VALIDA LANDING

function validalanding() {
  if (nome4.value == "" || email4.value == "" || telefone4.value == "" || cargo.value == "" || empresa.value == "" ) {
    alert("Preencha seus dados corretamente!");
    return false;
  } else {
    window.location.href = "../download/planodeensino.pdf";
  }
}







// function valida(){
//     if(nome.value == ""){
//         alert("Campo não preenchido!");
//         return false;
//     } 
//     return true;
//   }
