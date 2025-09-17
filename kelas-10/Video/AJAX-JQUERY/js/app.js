jQuery(document).ready(function ($) {
  //   console.log("Document ready");
  let id = "";
  let pelanggan = "";
  let alamat = "";
  let telp = "";

  $("#submit").click(function (e) {
    e.preventDefault();
    // alert("Tombol submit diklik");
    id = $("#id").val();
    pelanggan = $("#pelanggan").val();
    alamat = $("#alamat").val();
    telp = $("#telp").val();
    // console.log(pelanggan);

    if (id == "") {
      insertData();
    } else {
      updateData();
    }

    $("#id").val("");
    $("#pelanggan").val("");
    $("#alamat").val("");
    $("#telp").val("");
  });

  function selectData() {
    // alert("select data");
    $.ajax({
      type: "GET",
      url: "php/select.php",
      dataType: "json",
      success: function (response) {
        // console.log(response);
        let out = "";
        let no = 1;
        $.each(response, function (key, val) {
          //   console.log(val.pelanggan);
          out += `<tr>
            <th scope="row">${no++}</th>
            <td>${val.pelanggan}</td>
            <td>${val.alamat}</td>
            <td>${val.telp}</td>
          </tr>`;
        });
        $("#isidata").html(out);
      },
    });
  }
  selectData();

  function insertData() {
    // alert("insert data");
    let dataPelanggan = {
      pelanggan: pelanggan,
      alamat: alamat,
      telp: telp,
    };

    $.ajax({
      type: "POST",
      url: "php/insert.php",
      data: JSON.stringify(dataPelanggan),
      contentType: "application/json",
      success: function (response) {
        // console.log(response);
        let out = `${response}`;
        $("#msg").html(out);
        selectData();
      },
    });
  }

  function deleteData() {
    alert("delete data");
  }

  function updateData() {
    alert("update data");
  }
});
