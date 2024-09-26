<?php
include 'includes/header.php';
echo '<a href="index.php"><button>Voltar</button></a>';

/*
Estrutura do loop WHILE

while(condição){
    trecho de código para executar;
    atualizar a variável de controle;
}
*/

echo '<div class="whilePizza">';

$fatias = 8;

echo '<div class="comer"><p>Tenho uma pizza inteira!</p>';
echo '<p>Vou comer!</p>';
echo '<div class="pizza"><img src="assets/pizza-' . $fatias . '.png"></div>';
echo '</div>';

while ($fatias > 1) {
    $fatias -= 1;
    echo '<div class="comer"><p>Como uma fatia.</p>';
    echo "<p>restam {$fatias} fatias</p>";
    echo '<div class="pizza"><img src="assets/pizza-' . $fatias . '.png"></div>';
    echo '</div>';
}
echo "Comi a última fatia! Acabou a pizza!";
echo '</div>';
include 'includes/footer.php';
