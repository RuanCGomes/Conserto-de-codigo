<?php
    echo '<link rel="stylesheet" type="text/css" href="MadeiraEstilo.css">';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['txtNome'];
        $valorCompra = $_POST['txtValorCompra'];
        $formaPagamento = $_POST['cmbPag'];
        $desconto = 0;

        if (!is_numeric($valorCompra)) {
            $mensagem = "Valor inválido. Por favor, insira um valor numérico para a compra.";
        }
        elseif ($formaPagamento == "Cartão de crédito") {
            $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com cartão de crédito. Não há desconto.";
        } elseif ($formaPagamento == "Boleto") {
            $desconto = number_format($valorCompra * 0.08, 2, ',', '.');
            $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com boleto. Seu desconto é de R$ $desconto.";
        } elseif ($formaPagamento == "Depósito") {
            $desconto = number_format($valorCompra * 0.1, 2, ',', '.');
            $mensagem = "Olá $nome, sua compra de R$ $valorCompra foi realizada com depósito. Seu desconto é de R$ $desconto.";
        } else {
            $mensagem = "Forma de pagamento inválida.";
        }

        echo '<div class="container">';
            echo "<h3>$mensagem</h3>";
        echo '</div>';

    }

// Inicialmente os valores dos descontos estavam invertidos (0.08 no depósito e 0.1 no boleto), apenas troquei eles de lugar.

// A lógica da "$formaPagamento" usava abreviações para os tipos de pagamento, mas já que necesitave de texto, mudei eles
// para o texto completo ("Cartão de crédito", "Boleto" e "Depósito") e também coloquei especificamente o que poderia ser
// escrito no "placeholder" da forma de pagamento, no código html.

// Removi o valor do $desconto caso o pagamento seja com cartão de crédito, já que a variável não aparece na mensagem.

// Adicionei mais uma "if" para certificar se o valor da compra for um valor numérico ou não.

// E por fim nas definições $nome, $valorCompra e $formaPagamento troquei os " por ', já que eram variáveis ao invés de texto.
?>