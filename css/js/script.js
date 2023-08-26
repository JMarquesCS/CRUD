document.getElementById("formAdd").addEventListener("submit", function(event) {
    var tituloAdd = document.getElementById("tituloAdd").value;
    var descricaoAdd= document.getElementById("descricaoAdd").value;

    if (tituloAdd === "" || descricaoAdd === "") {
        event.preventDefault(); // Impede o envio do formulário se campos estiverem vazios
        alert("Por favor, preencha todos os campos.");
    }
});