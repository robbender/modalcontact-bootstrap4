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
  // First Modal action with one modal
    $('.modal').on('hidden.bs.modal', function(){
      $(this).find('form')[0].reset();
  });

  // Second Modal Action
  $('input#submit').click(function(e) {
    e.preventDefault();

    $('#form-content')
      .modal('hide')
      .on('hidden.bs.modal', function(e) {
        $('#response').modal('show');

        $(this).off('hidden.bs.modal'); // Remove the 'on' event binding
      });

  });
});
