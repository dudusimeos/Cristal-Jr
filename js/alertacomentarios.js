
function valida() {
  if (nome.value == "" || email.value == "" || mensagem.value == "") {
    alert("Campo não preenchido!");
    return false;
  } else {
    alert("Sua mensagem foi enviada com sucesso!");
    return true;
  }
}

// EBOOK ESQUERDA

function valida2() {
  if (nome.value == "" || email.value == "" || telefone.value == "") {
    alert("Campo não preenchido!");
    return false;
  } else {
    window.location.href = "../download/planodeensino.pdf";
  }
}

// EBOOK MEIO

function valida3() {
  if (nome2.value == "" || email2.value == "" || telefone2.value == "") {
    alert("Campo não preenchido!");
    return false;
  } else {
    window.location.href = "../download/planodeensino.pdf";
  }
}

// EBOOK DIREITA

function valida4() {
  if (nome3.value == "" || email3.value == "" || telefone3.value == "") {
    alert("Campo não preenchido!");
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
