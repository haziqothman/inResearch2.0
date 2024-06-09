$(function () {
  $(".tombolTambahData").on("click", function () {
    $("#formModalLabel").html("Tambah data mahasiswa");
    $(".modal-footer button[type=submit]").html("Tambah data");
  });

  $(".edit").on("click", function () {
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost/inResearch2.0/public/staff/getEdit",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        console.log("data", data);
        $("#id").val(data.id);
        $("#name").val(data.name);
        $("#email").val(data.email);
        $("#phone").val(data.phone);
        $("#role").val(data.role);
        $("#matric").val(data.matric);
        $("#password").val(data.password);
      },
    });
  });
});
