document.querySelector("#klik").addEventListener("click", tampil);
function tampil() {
  // console.log("tombol diklik");
  let url = "js/tblmenu.json";
  fetch(url)
    .then(function (res) {
      return res.json();
    })
    .then(function (data) {
      // console.log(data);
      let output =
        "<h1>Data Menu</h1> <table class='table' border='1'> <th>Menu</th> <th>Harga</th> <th>Warna</th>";
      data.forEach(function (menu) {
        output += `
          <tr>
            <td>${menu.menu}</td>
            <td>${menu.harga}</td>
            <td>${menu.warna[0]}</td>
          </tr>
        `;
      });
      output += "</table>";
      document.querySelector("#isi").innerHTML = out;
    });
}

// let tblmenu = [
//   {
//     idmenu: 1,
//     idkategori: 1,
//     menu: "Ayam Bakar",
//     gambar: "ayam.jpg",
//     harga: 25000,
//     warna: ["merah", "kuning", "hijau"],
//     stok: true,
//     keterangan: null,
//   },
//   {
//     idmenu: 2,
//     idkategori: 1,
//     menu: "ikan",
//     gambar: "ikan.jpeg",
//     harga: 20000,
//     warna: ["merah", "kuning"],
//     stok: false,
//     keterangan: null,
//   },
// ];

// console.log(tblmenu[0].idmenu);
// console.log(tblmenu[0].menu);
// console.log(tblmenu[0].harga);
// console.log(tblmenu[0].warna[0]);
// console.log(tblmenu[0].warna[1]);
// console.log(tblmenu[0].warna[2]);
