var $input_quantidade = document.querySelector("#qtd");
var $output_total = document.querySelector("#total");

$input_quantidade.oninput = function () {
    var preco = document.querySelector("#preco").textContent;
    preco = preco.replace("R$ ", "").trim();
    preco = preco.replace(",", ".");
    preco = parseFloat(preco);
    var quantidade = parseFloat($input_quantidade.value);
    if (isNaN(quantidade) || isNaN(preco)) {
        $output_total.value = "R$ 0,00";
        return;
    }
    var total = quantidade * preco;
    total = "R$ " + total.toFixed(2).replace(".", ",");
    $output_total.value = total;
};