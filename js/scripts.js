$(document).ready(function () {
  $("#frmWrite").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      url: "/fullstack/index.php?function=f_Send",
      data: $("#frmWrite").serialize(),
      dataType: 'JSON',
      method: "POST",
      success: function (data) {
        $("#msgSend").text(data.message);
        $("#msgSend").show();
        setTimeout(() => {
          $("#msgSend").hide();
          $("#frmWrite").reset();
        }, "1000");
      }
    });
  })
});