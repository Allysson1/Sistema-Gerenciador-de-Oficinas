// pega o ID do input de pesquisa
let campoFiltro = document.querySelector("#filtrar-tabela");

campoFiltro.addEventListener("input", function () {
  console.log(this.value);
  let usuarios = document.querySelectorAll(".consulta");

  if (this.value.length > 0) {
    for (let i = 0; i < usuarios.length; i++) {
      let usuario = usuarios[i];
      let tdDado = usuario.querySelector(".info-nome");
      let Dado = tdDado.textContent;
      let expressao = new RegExp(this.value, "i");

      //se os dados forem diferentes do que foi digitado, adiciona uma classe
      // com o nome de invisivel
      if (!expressao.test(Dado)) {
        usuario.classList.add("d-none");
      } else {
        usuario.classList.remove("d-none");
      }
    }
  } else {
    for (let i = 0; i < usuarios.length; i++) {
      let usuario = usuarios[i];
      usuario.classList.remove("invisivel");
    }
  }
});
