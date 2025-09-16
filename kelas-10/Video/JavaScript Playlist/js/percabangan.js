if (true) {
  console.log("dijalankan jika true");
} else {
  console.log("dijalankan jika false");
}

let nilai = 60;
let standar = 60;
let baik = "LULUS";
let tidakbaik = "TIDAK LULUS";
let batasatas = 100;
let batasbawah = 0;
let peringatan = "nilai di luar batas";

if (nilai <= batasatas && nilai >= batasbawah) {
  if (nilai >= standar) {
    console.log(baik);
  } else {
    console.log(tidakbaik);
  }
} else {
  console.log(peringatan);
}
