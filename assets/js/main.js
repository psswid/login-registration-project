$(document)
.on("submit", "form.js-register", function(event){
  event.preventDefault();

  var _form = $(this);
  var _error = $(".js-error", _form);

  var dataObj = {
    email: $("input[type='email']", _form).val(),
    password: $("input[type='password']", _form).val()
  }

  if(dataObj.email.length < 6){
    _error
      .text("Please enter a valid email adress")
      .show();
    return false;
  } else if (dataObj.password.length < 11){
    _error
      .text("Enter password with at least 11 characters")
      .show();
    return false;
  }

  //If above succeeded, start ajax
  _error.hide();

  $.ajax({
    type: 'POST',
    url: 'ajax/register.php',
    data: dataObj,
    dataType: 'json',
    async: true,
  })
  .done(function ajaxDone(dataObj){
    console.log(dataObj);
    if(dataObj.redirect !== undefined){
      window.location = dataObj.redirect;
    }

    alert(dataObj.name);
  })
  .fail(function ajaxFailed(e){
    console.log(e);
  })
  .always(function ajaxAlwaysDoThis(dataObj){
    console.log('Always');
  })

  return false;
})


//Encryption
