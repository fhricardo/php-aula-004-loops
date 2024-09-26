<?php
include 'includes/header.php';

echo "<h2>Exemplo de utilização do loop FOR</h2>";

echo '<a href="index.php"><button>Voltar</button></a>';

$numero = $_POST['numero'];
/*
Estrutura do FOR
for(inicialização ; condição ; incremento){
    trecho de código para executar;
}
*/
for ($i = 1; $i <= $numero; $i++) {
    echo "<p class='box'>O número é {$i} </p>";
}
echo '<p class="box">Acabou a contagem</p>';
include 'includes/footer.php';
