document.addEventListener("DOMContentLoaded", () => {
  const container = document.getElementById("contenuto-negozi");
  if (!container) return;

  fetch("api_negozi.php")
    .then(res => res.json())
    .then(negozi => {
      container.innerHTML = ""; // Pulisce il caricamento
      negozi.forEach(negozio => {
        const div = document.createElement("div");
        div.className = "negozio";
        div.innerHTML = `
          <h3>${negozio.nome}</h3>
          <p><strong>Categoria:</strong> ${negozio.categoria}</p>
          <p>${negozio.descrizione}</p>
        `;
        container.appendChild(div);
      });
    })
    .catch(err => {
      container.innerHTML = "Errore nel caricamento.";
      console.error(err);
    });
});
