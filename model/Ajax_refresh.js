$(document).on("click", "#btn-insert", function (e) {
  const insert = {
    send: $("input[name=data-insert]").val(),
  };

  $.ajax({
    type: "POST",
    url: "controller/Ajax.php",
    data: insert,
    dataType: "json",
    encode: true,
    success: function (res) {
      console.log("success");
      Swal.fire("Good job!", res.status, "success");
    },
  });

  e.preventDefault();

  console.log(insert.send);
});
