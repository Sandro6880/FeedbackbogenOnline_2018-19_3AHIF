function myFunction() {
  $("#sub").click(function() {
   $.post( $("#quiz").attr("action"),
           $("#quiz :input").serializeArray(),
           function(info){ $("#result").html(info);
     });
   clearInput();
  });

  $("#quiz").submit( function() {
    return false;
  });

  function clearInput() {
  	$("#quiz :input").each( function() {
  	   $(this).val('');
  	});
  }
}
