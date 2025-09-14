function coba() {
  a = document.querySelector(".isi");
  a.innerHTML = "Belajar Event Listener";
  console.log("Coba Event Listener");
}
// judul.addEventListener("click", coba);
// judul.onclick = coba;
// judul.onmouserover = coba;
judul.onmouserover = function () {
  console.log("Coba Function Anonymous");
};
