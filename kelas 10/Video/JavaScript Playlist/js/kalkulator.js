let btn = document.querySelectorAll(".btn-angka > button");
let tampil = document.querySelector("#tampil");

for (let index = 0; index < btn.length; index++) {
  btn[index].onclick = function () {
    // console.log(btn[index].innerHTML);
    tampil.value = btn[index].innerHTML;
  };
}
