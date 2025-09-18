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

  $("#btn-tambah").click(function (e) {
    e.preventDefault();
    // alert("Tombol tambah diklik");

    $("#tittle").html("<p>Tambah Data</p>");

    $("#id").val("");
    $("#pelanggan").val("");
    $("#alamat").val("");
    $("#telp").val("");
  });

  $("tbody").on("click", ".btn-del", function () {
    let id = $(this).attr("data-id");
    // alert("Delete id " + id);
    if (confirm("Yakin data akan dihapus tuan?")) {
      // alert("Data akan dihapus");
      deleteData(id);
    }
  });

  $("tbody").on("click", ".btn-ubah", function () {
    let id = $(this).attr("data-id");
    // alert("Delete id " + id);
    $("#tittle").html("<p>Ubah Data</p>");
    selectUpdate(id);
  });

  function selectUpdate(id) {
    // alert("select update " + id);
    let idPelanggan = {
      idPelanggan: id,
    };

    $.ajax({
      type: "POST",
      url: "php/selectupdate.php",
      cache: false,
      data: JSON.stringify(idPelanggan),
      contentType: "application/json",
      success: function (response) {
        // console.log(response);
        let data = JSON.parse(response);
        // console.log(data.idpelanggan);
        // console.log(data.pelanggan);
        // console.log(data.alamat);
        // console.log(data.telp);
        // console.log(data);

        $("#id").val(data.idpelanggan);
        $("#pelanggan").val(data.pelanggan);
        $("#alamat").val(data.alamat);
        $("#telp").val(data.telp);
      },
    });
  }

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
            <td>
                <button class="btn btn-danger btn-sm btn-del" data-id="${
                  val.idpelanggan
                }">DEL</button>
            </td>
            <td>
                <button class="btn btn-warning btn-sm btn-ubah" data-id="${
                  val.idpelanggan
                }">UBAH</button>
            </td>
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
      cache: false,
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

  function deleteData(id) {
    // alert("delete data " + id);
    let idPelanggan = {
      idPelanggan: id,
    };

    $.ajax({
      type: "POST",
      url: "php/delete.php",
      cache: false,
      data: JSON.stringify(idPelanggan),
      contentType: "application/json",
      success: function (response) {
        // console.log(response);
        let out = `${response}`;
        $("#msg").html(out);
        selectData();
      },
    });
  }

  function updateData() {
    // alert("update data");
    let dataPelanggan = {
      idpelanggan: id,
      pelanggan: pelanggan,
      alamat: alamat,
      telp: telp,
    };

    $.ajax({
      type: "POST",
      url: "php/update.php",
      cache: false,
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
});
