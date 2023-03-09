$("form").on("change", ".file-upload-field", function(){ 
  $(this).parent(".file-upload-wrapper").attr("data-text",         $(this).val().replace(/.*(\/|\\)/, '') );
});

// no reenviar formulario
if (window.history.replaceState)
{
	window.history.replaceState(null, null, window.location.href)
}


function validaNumericos(evt) {
        
  // Only ASCII character in that range allowed
  var ASCIICode = (evt.which) ? evt.which : evt.keyCode;

  if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
  {
      return false;
  }
  else
  {
      return true;
  }
}


document.getElementById("myForm1").onchange = function() {
    // submitting the form
    document.getElementById("myForm1").submit();
};
