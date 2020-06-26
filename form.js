$(document).ready(function() {
  $("input#submit").click(function() {
    $.ajax({
      type: "POST",
      url: "process.php", //
      data: $('form.contact').serialize(),
      success: function(msg) {
        $("#thanks").html(msg)
        $("#form-content").modal('hide');
      },
      error: function() {
        alert("failure");
      }
    });
  });
});
