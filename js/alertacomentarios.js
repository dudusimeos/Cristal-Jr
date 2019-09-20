
function valida() {
  if (nome.value == "" || email.value == "" || mensagem.value == "") {
    alert("Campo não preenchido!");
    return false;
  } else {
    alert("Sua mensagem foi enviada com sucesso!");
    return true;
  }
}

function valida2() {
  if (nome.value == "" || email.value == "" || telefone.value == "") {
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
