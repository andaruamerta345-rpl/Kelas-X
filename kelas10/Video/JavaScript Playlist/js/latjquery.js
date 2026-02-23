$(document).ready(function () {
  console.log("Document ready");
});

$(function () {
  //   console.log("Document ready");
  $("#isi").html("<h1>Hello jQuery</h1>");

  $("#klik").click(function (e) {
    e.preventDefault();
    alert("Belajar jQuery");
  });

  $("#isi").mouseleave(function () {
    alert("Mouse keluar area");
    console.log("Mouse keluar area");
  });
});
