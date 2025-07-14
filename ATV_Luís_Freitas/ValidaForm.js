document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector(".form");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Cancela o envio padrão do formulário

        const nome = document.querySelector(".nome").value.trim();
        const categoria = document.querySelector(".select").value;
        const valor = parseFloat(document.querySelector(".number").value);
        const medidaUN = document.querySelector(".medida1").checked;
        const medidaKG = document.querySelector(".medida").checked;
        const quantidade = parseInt(document.querySelector(".quantidade").value);
        const validade = document.querySelector(".validade").value;
        const fornecedor = document.querySelector(".fornecedor").value.trim();

        let erros = [];

        if (nome === "") erros.push("🛑 Nome do produto é obrigatório.");
        if (!categoria) erros.push("🛑 Categoria deve ser selecionada.");
        if (isNaN(valor) || valor <= 0) erros.push("🛑 Valor deve ser maior que zero.");
        if (!medidaUN && !medidaKG) erros.push("🛑 Selecione uma medida (UN ou KG).");
        if (isNaN(quantidade) || quantidade <= 0) erros.push("🛑 Quantidade deve ser maior que zero.");
        if (validade === "") erros.push("🛑 Data de validade é obrigatória.");
        if (fornecedor === "") erros.push("🛑 Fornecedor é obrigatório.");

        if (erros.length > 0) {
            alert("⚠️ Erros encontrados:\n\n" + erros.join("\n"));
        } else {
            alert("✅ Produto cadastrado com sucesso! 🙌");
            form.submit(); // Envia o formulário se estiver tudo certo
        }
    });
});
