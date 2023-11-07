$(document).on('submit', '#saveUser', function (e){
    e.preventDefault();

    var formData = new FormData(this);
    formData.append("save_user", true);

    $.ajax({
        type: "POST",
        url: "sp_insertdata.php",
        data:formData,
        processData: false,
        contentType: false,
        success: function (reponse) {

        }
    });
  });