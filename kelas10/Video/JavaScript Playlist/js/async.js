document.querySelector("#klik").addEventListener("click", tampil);
async function tampil() {
  const url = "https://jsonplaceholder.typicode.com/users";
  const res = await fetch(url);
  const data = await res.json();
  //   console.log(data);

  let out = "<ul>";
  data.forEach((element) => {
    out += `<li>${element.name} - ${element.email}</li>`;
    // console.log(element.name);
  });
  out += "</ul>";
  document.querySelector("#isi").innerHTML = out;
}
