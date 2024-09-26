<?php
include 'includes/header.php';
echo '<a href="index.php"><button>Voltar</button></a>';
echo '<div class="whilePizza">';

$fatias = 8;
$comer = $_POST['fatias'];
$limite = $fatias - $comer;

echo '<div class="comer"><p>Tem uma pizza inteira!</p>';
echo '<p>Aceita?</p>';
echo '<div class="pizza"><img src="assets/pizza-' . $fatias . '.png"></div>';
echo '</div>';
/**
 * $variávelDeControle = X;
 * Estrutura DO...WHILE
 * do{
 *      trecho do código que vamos executar;
 *      incluir a atualização da variável de controle;
 * }
 * while(condição);
 */
do {
    if ($comer == 0) {
        echo '<div class="comer"><p>Não seja mal-educado!</p>';
        echo '<p>Coma pelo menos uma fatia!</p>';
        echo '<div class="pizza"><img src="assets/pizza-7.png"></div>';
        echo '</div>';
        break;
    } else {
        echo '<div class="comer"><p>' . $comer . ' pedaços?</p>';
        echo '<p>Aqui está, fique à vontade!</p>';
        $fatias -= 1;
        echo '<div class="pizza"><img src="assets/pizza-' . $fatias . '.png"></div>';
        echo '</div>';
    }
} while ($fatias > $limite);
echo '<p>Fico feliz que você tenha gostado da pizza!</p>';
echo '</div>';
include 'includes/footer.php';
