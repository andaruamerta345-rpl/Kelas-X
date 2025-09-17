jQuery(document).ready(function ($) {
  //   console.log("Document ready");
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
    alert("insert data");
  }

  function deleteData() {
    alert("delete data");
  }

  function updateData() {
    alert("update data");
  }
});
