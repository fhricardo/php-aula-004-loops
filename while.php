<?php
include 'includes/header.php';



echo '<a href="index.php"><button>Voltar</button></a>';

/*switch(valor){
    caso "valor 1":
        trecho de código a executar;
        break;
    caso "valor 2":
        trecho de código a executar;
        break;
    default:
        trecho de código para executar por padrão, caso os valores não sejam encontrados;
        break;
}*/

echo '<div class="whilePizza">';
$fatias = 8;

echo '<div class="comer"><p>Tenho uma pizza inteira!</p>';
echo '<p>Vou comer!</p>';
echo '<div class="pizza"><img src="assets/pizza-' . $fatias . '.png"></div>';
echo '</div>';

while ($fatias > 1) {
    echo '<div class="comer"><p>Como uma fatia.</p>';
    $fatias -= 1;
    echo "<p>restam {$fatias} fatias</p>";
    echo '<div class="pizza"><img src="assets/pizza-' . $fatias . '.png"></div>';
    echo '</div>';
}
echo "Comi a última fatia! Acabou a pizza!";
echo '</div>';
include 'includes/footer.php';
