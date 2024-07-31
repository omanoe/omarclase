$('input').focus(function(){
    var input = $(this);
    input.closest('.field-container').addClass('-focused');
  });
  
  $('input').blur(function(){
    var input = $(this);
    if (input.val().length === 0) {
      input.closest('.field-container').removeClass('-focused');
    }
  });

