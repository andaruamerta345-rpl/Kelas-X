let tblmenu = [
  {
    idmenu: 1,
    idkategori: 1,
    menu: "Ayam Bakar",
    gambar: "ayam.jpg",
    harga: 25000,
  },
  {
    idmenu: 2,
    idkategori: 1,
    menu: "ikan",
    gambar: "ikan.jpeg",
    harga: 20000,
  },
  {
    idmenu: 3,
    idkategori: 2,
    menu: "Es Teh",
    gambar: "esteh.jpg",
    harga: 15000,
  },
  {
    idmenu: 4,
    idkategori: 2,
    menu: "Es Joger",
    gambar: "esjoger.jpg",
    harga: 20000,
  },
  {
    idmenu: 5,
    idkategori: 3,
    menu: "Risol",
    gambar: "risol.jpg",
    harga: 20000,
  },
  {
    idmenu: 6,
    idkategori: 3,
    menu: "Putu Ayu",
    gambar: "putuayu.jpg",
    harga: 20000,
  },
];

let tampil = tblmenu.map(function (kolom) {
  return `
    <div class="col-md-4 d-flex justify-content-center">
        <div class="card m-2" style="width: 12rem;">
            <img src="assets/${kolom.gambar}" class="card-img-top" alt="${kolom.menu}">
            <div class="card-body">
                <h5 class="card-title">${kolom.menu}</h5>
                <p class="card-text">Rp. ${kolom.harga}</p>
                <div class="btn-beli">
                    <button class="btn btn-primary" data-idmenu="${kolom.idmenu}">Beli</button>
                </div>
            </div>
        </div>
    </div>
  `;
});
let isi = document.querySelector(".row");
isi.innerHTML = tampil.join("");
console.log(tampil);

let btnbeli = document.querySelectorAll(".btn-beli button");
let cart = [];

for (let i = 0; i < btnbeli.length; i++) {
  btnbeli[i].onclick = function () {
    // console.log(btnbeli[i].dataset["idmenu"]);
    cart.push(btnbeli[i].dataset["idmenu"]);
  };
}
console.log(cart);
