let a = true;
let b = false;
let c = true;
let d = false;

// OR
// maka akan true jika salah satu bernilai true
console.log(a || b);
console.log(d || b || a);

// AND
// maka akan true jika semua bernilai true / akan false jika salah satu bernilai false
console.log(a && b && c);
console.log(c && d);

let x = 8;
let y = 7;
// Lebih besar
console.log(x > y);

// Lebih kecil
console.log(x < y);

// Sama dengan
console.log(x == y);

//lebih besar sama dengan
console.log(x >= y);

//lebih kecil sama dengan
console.log(x <= y);

// Tidak sama dengan
console.log(x != y);

let lima = "5";
let limo = 5;

//nilai sama tetapi tipe data berbeda
console.log(lima == limo);

//nilai dan tipe data wajib sama
console.log(lima === limo);
