<?php
include 'includes/header.php';

echo "<h2>Exemplo de utilização do loop FOR</h2>";

echo '<a href="index.php"><button>Voltar</button></a>';

$numero = $_POST['numero'];
//if(condição){
//      trecho de código para executar, caso a condição seja atendida.
//}else{
//      trecho de código para executar, caso nenhuma condição seja atendida.
//}
for ($i = 1; $i < $numero; $i++) {
    echo "<p>Numero é {$i} </p>";
}
include 'includes/footer.php';
