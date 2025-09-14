function coba() {
  let belajar = "Saya Belajar JavaScript";
  console.log(belajar);
  console.log("JavaScript itu mudah");
}
// coba();
// for (let i = 0; i < 4; i++) {
//   coba();
// }

function persegiPanjang(Panjang, Lebar) {
  console.log("Panjang = " + Panjang);
  console.log("Lebar = " + Lebar);
  let luas = Panjang * Lebar;
  console.log("Luas Persegi Panjang = " + luas);
}
// persegiPanjang(7, 8);

function out() {
  return console.log("Output function");
}
// out();

function lingkaran(r) {
  luas = 3.14 * r * r;
  return luas;
}
// lingkaran(10);

const tinggi = 5;
let tabung = lingkaran() * tinggi;
// console.log("Luas Tabung = " + tabung);

function lewat(a) {
  return a;
}
console.log(lewat(5));
