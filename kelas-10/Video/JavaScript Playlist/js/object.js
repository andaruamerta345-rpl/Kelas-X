const objek = {
  nama: "Asep",
  telp: "08123456789",
  buah: ["Apel", "Jeruk", "Mangga"],
  coba: function () {
    return "Coba Function Dalam Object";
  },
  boleh: true,
  "Tulis aja": 1234,
};
console.log(objek);
// cara akses object
console.log(objek.nama);
console.log(objek.telp);
console.log(objek.buah[0]);
console.log(objek.buah[1]);
console.log(objek.buah[2]);
console.log(objek.coba());
console.log(objek.boleh);
console.log(objek["Tulis aja"]);
