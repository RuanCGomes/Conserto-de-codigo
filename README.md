# Conserto de Código

Esta agenda acabou sendo mais fácil, já que parte do código já estava feito!
Incorretamente, é claro, esse era o desafio, mas mesmo assim acabou sendo mais tranquilo.

Eu adicionei comentários no próprio código, mas mesmo assim as correções foram:
- Inicialmente, os valores dos descontos estavam invertidos (0.08 no depósito e 0.1 no boleto); apenas os troquei de lugar.
- A lógica da "$formaPagamento" usava abreviações para os tipos de pagamento, mas já que necessitava de texto, mudei-os para o texto completo ("Cartão de crédito", "Boleto" e "Depósito") e também coloquei especificamente o que poderia ser escrito no "placeholder" da forma de pagamento, no código html.
- Removi o valor do $desconto caso o pagamento seja com cartão de crédito, já que a variável não aparece na mensagem.
- Adicionei mais uma "if" para verificar se o valor da compra é um valor numérico ou não.
- E por fim, nas definições $nome, $valorCompra e $formaPagamento troquei os " por ', já que eram variáveis ao invés de texto.

Assim como na última agenda, o site precisa que **o Apache do XAMPP esteja ligado** e que **o HTML seja aberto pelo localhost** para funcionar!
Até a próxima!

<img height="160" width="160" src="https://raw.githubusercontent.com/marwin1991/profile-technology-icons/refs/heads/main/icons/html.png" />
