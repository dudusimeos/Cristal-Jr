// <!-- JAVA SCRIPT DO FORMULÁRIO -->

    $(".input").focus(function () {
      $(this).parent().addClass("focus");
    }).blur(function () {
      if ($(this).val() === '') {
        $(this).parent().removeClass("focus");
      }
    })
  
