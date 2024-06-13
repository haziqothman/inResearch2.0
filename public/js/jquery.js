$(function () {
  $(".edit").on("click", function () {
    const id = $(this).data("id");
    $.ajax({
      url: "http://localhost:8000/inResearch2.0/public/staff/getEdit",
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
        $("#address").val(data.address);
        $("#password").val(data.password);
      },
    });
  });

  $(".editProfile").on("click", function () {
    console.log("hello");
    $.ajax({
      url: "http://localhost:8000/inResearch2.0/public/profile/getProfile",
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
        $("#address").val(data.address);
        $("#password").val(data.password);
      },
    });
  });
});
